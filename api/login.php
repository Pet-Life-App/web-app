<?php
require_once("../inc/global.inc.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($isPost) {
    if ($_POST['email_address'] && $_POST['password']) {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $get = $db->prepare("SELECT * FROM users WHERE email_address = ? OR mobile_number = ?");
        $get->bind_param("ss", $_POST['email_address'], $_POST['email_address']);
        $get->execute();
        $get = $get->get_result();
        if ($get->num_rows) {
            $loggedInUser = $get->fetch_assoc();

            if (password_verify($_POST['password'], $loggedInUser['password'])) {
                $user = User::makeFromUserArray($loggedInUser);
                $auth->setUser($user);
                $sessionID = $auth->createSession($user);
                $auth->setSession($sessionID);

                $res['success'] = true;
            } else {
                $res['errors'][] = ["text" => "Password Incorrect", "id" => ["email_address"]];
            }
        } else {
            $res['errors'][] = ["text" => "Account not found", "id" => ["email_address"]];
        }
    } else {
        $res['errors'][] = ["text" => "Fill in all fields", "id" => ["email_address", "password"]];
    }
}

header("content-type:application/json");
echo json_encode($res);
