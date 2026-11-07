<?php

session_start();

$errors = [];

include "../core/funnctions.php";
include "../core/validations.php";

if (checkRequestMethod("POST") && checkPostinput('email')) {

    foreach ($_POST as $key => $value) {
        $$key = santizainput($value);
    }

    // Validation

    if (!reqirderVal($email)) {
        $errors[] = "Email can't be empty";
    }

    if (!reqirderVal($password)) {
        $errors[] = "Password can't be empty";
    }

    // Check users

    if (empty($errors)) {

        $users_file = fopen("../data/users.csv", "r");

        $user_found = false;

        while (($user = fgetcsv($users_file)) !== false) {

            if (
                $email == $user[1] &&
                sha1($password) == $user[2]
            ) {

                $_SESSION['auth'] = [
                    $user[0],
                    $user[1]
                ];

                $user_found = true;
                break;
            }
        }

        fclose($users_file);

        if ($user_found) {

            header("location:../profile.php");
            die();

        } else {

            $errors[] = "Email or Password is incorrect";

        }
    }

    if (!empty($errors)) {

        $_SESSION['errors'] = $errors;

        header("location:../login.php");
        die();
    }
}