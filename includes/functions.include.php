<?php

function emptyInputSignup($fullName, $userName, $email, $password, $confirmPassword){
    $result;
    if(empty($fullName) || empty($email) || empty($userName) || empty($password) || empty($confirmPassword)){
    $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function invalidUsername($userName){

    $result; 

    if(!preg_match("/^[a-zA-Z0-9]*$/", $userName)){

        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidEmail($email){

    $result;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function passwordMatch($password, $confirmPassword){

    $result;

    if($password !== $confirmPassword){

        $result= true;
    }
    else{
        $result= false;
    }

    return $result;
}

function userExists($connect, $email, $userName){

    // Use prepared statements to prevent sql injection

    $sql = "SELECT * FROM users WHERE  usersEmail = ? OR usersUsername = ?;";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss", $email, $userName);
    mysqli_stmt_execute($stmt);

    // Get results from the created statement ($stmt)

    $resultData = mysqli_stmt_get_result($stmt);


    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($connect, $fullName, $email, $userName, $password){

    // Use prepared statements to prevent sql injection

    $sql = "INSERT INTO users (usersFullName, usersEmail, usersUsername, usersPassword) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($connect);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    // hash passwords

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",  $fullName, $email, $userName, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signup.php?success=SuccesfullySignedUp");
        exit();  
}

// Log in

function emptyInputLogIn($userName, $password){
    $result;
    if(empty($userName) || empty($password)){
    $result = true;
    }
    else{
        $result = false;
    }

    return $result;
} 

function logInUser($connect, $userName, $password){
    $userNameExists = userExists($connect, $userName, $userName);

    if($userNameExists === false){
        header("location: ../login.php?error=wrongLogIn");
        exit();
    }

    // grab the hashed password
    $passwordHashed = $userNameExists["usersPassword"];

    //check if the password entered matches the password in the database
    $passwordCheck = password_verify($password, $passwordHashed);

    if($passwordCheck === false){
        header("location: ../login.php?error=wrongLogIn");
        exit();
    }

    else if($passwordCheck === true){
       session_start();
       $_SESSION["userid"] = $userNameExists["usersId"];
       $_SESSION["userusername"] = $userNameExists["usersUsername"];
       header("location: ../index.php?");
       exit();
    }
}