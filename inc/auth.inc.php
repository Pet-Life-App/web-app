<?php
class Auth
{
    public ?User $user;

    public function __construct()
    {
        $this->user = null;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function createSession(User $user): string
    {
        global $db;

        $uuid = $this::genUUID();
        $date = time();

        $insert = $db->prepare("INSERT INTO sessions (id, user_id, date) VALUES (?, ?, ?)");
        $insert->bind_param("sss", $uuid, $user->id, $date);
        $insert->execute();

        return $uuid;
    }

    public function setSession(string $id): void
    {
        setcookie("session", $id, 0, "/");
    }

    private static function genUUID(string $data = null): string
    {
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
