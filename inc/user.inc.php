<?php
class User
{
    public function __construct(int $id, string $first_name, string $last_name, string $email, string $mobile_number, string $city)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->mobile_number = $mobile_number;
        $this->city = $city;
    }

    public static function makeFromUserArray(array $array): self
    {
        return new self((int)$array['id'], $array['first_name'], $array['last_name'], $array['email_address'], $array['mobile_number'], $array['city']);
    }

    public function getID(): int
    {
        return $this->id;
    }
}
