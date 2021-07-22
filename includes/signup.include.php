<?php

$submit = $_POST["submit"];

if(isset($submit)){

// Use trim function to remove the white space

    $fullName = trim($_POST["name"]);
    $email = trim($_POST["user_email"]);
    $userName = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirm_password"]);

    require_once 'databasehandler.include.php';
    require_once 'functions.include.php';

    // Error handling

    if(emptyInputSignup($fullName, $email, $userName, trim($_POST["password"]), trim($_POST["confirm_password"])) === true){
        header("location: ../signup.php?error=emptyInput");
        exit();
    }

    if(invalidUsername($userName) === true){
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }

    if(invalidEmail($email) === true){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }

    if(passwordMatch(trim($_POST["password"]), trim($_POST["confirm_password"])) === true){
        header("location: ../signup.php?error=passwordsDontMatch");
        exit();
    }

    if(userExists($connect, $email, $userName) == true){
        header("location: ../signup.php?error=usernameOrEmailTaken");
        exit();
    }

    createUser($connect, $fullName,$email, $userName, $password);

    }
    else{
        header("location: ../signup.php");
        exit(); 
    }