<?php
require_once("../inc/global.inc.php");


function checkFields($first_name, $last_name, $email, $mobile_number, $city, $password, $confirm_password)
{
    $errors = [];
    if (!$first_name) $errors[] = ["text" => "Please enter your first name", "id" => ["first_name"]];
    if (!$last_name) $errors[] = ["text" => "Please enter your last name", "id" => ["last_name"]];
    if (!$email) $errors[] = ["text" => "Please enter your email", "id" => ["email_address"]];
    if (!$mobile_number) $errors[] = ["text" => "Please enter your mobile number", "id" => ["mobile_number"]];
    if (!$city) $errors[] = ["text" => "Please enter your city", "id" => ["city"]];
    if (!$password) $errors[] = ["text" => "Please enter your password", "id" => ["password"]];
    if (!$confirm_password) $errors[] = ["text" => "Please enter your confirm password", "id" => ["confirm_password"]];

    if ($password !== $confirm_password) {
        $errors[] = ["text" => "Your passwords don't match", "id" => ["password", "confirm_password"]];
    }

    return $errors;
}

if ($isPost) {
    $errors = checkFields($_POST['first_name'], $_POST['last_name'], $_POST['email_address'], $_POST['mobile_number'], $_POST['city'], $_POST['password'], $_POST['confirm_password']);
    if (!count($errors)) {
        $checkForAccount = $db->prepare("SELECT * FROM users WHERE email_address = ?");
        $checkForAccount->bind_param("s", $_POST['email_address']);
        $checkForAccount->execute();
        $checkForAccount = $checkForAccount->get_result();
        if (!$checkForAccount->num_rows) {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $insert = $db->prepare("INSERT INTO users (first_name, last_name, email_address, mobile_number, city, password) VALUES (?, ?, ?, ?, ?, ?)");
            $insert->bind_param("ssssss", $_POST['first_name'], $_POST['last_name'], $_POST['email_address'], $_POST['mobile_number'], $_POST['city'], $password);
            $insert->execute();

            $res['success'] = true;
        } else {
            $res['errors'][] = ["text" => "There is already an account with that email address.", "id" => ["email_address"]];
        }
    } else {
        $res['errors'] = $errors;
    }
}

header("content-type:application/json");
echo json_encode($res);
