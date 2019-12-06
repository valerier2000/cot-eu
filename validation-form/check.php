<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Invalid login length";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
        echo "Invalid name length";
        exit();
    } if(mb_strlen($password) < 5 || mb_strlen($password) > 32){
        echo "Invalid password length(from 5 characters)";
        exit();
    } if(mb_strlen($email) < 5 || mb_strlen($email) > 50){
        echo "Invalid email length";
        exit();
    }

    $password = md5($password."dfghjkl12356");

    require "blocks/connect.php";

    $mysql->query("INSERT INTO `users` (`login`, `password`, `name`, `email`) 
    VALUES('$login', '$password', '$name', '$email')");

    $mysql->close();

    header('Location: ../validation-form/register.php');
?>