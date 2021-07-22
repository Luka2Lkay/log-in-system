<?php 

$submit = $_POST["submit"];

if(isset($submit)){

// Use trim function to remove the white space
    $userName = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    require_once 'databasehandler.include.php';
    require_once 'functions.include.php';

    // Error handling
    if(emptyInputLogIn($userName, trim($_POST["password"])) === true){
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    logInUser($connect, $userName, $password);
}

else{
    header("location: ../login.php");
    exit();
}