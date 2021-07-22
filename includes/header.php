<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Log in system</title>
</head>

<body>
    <!-- Header starts here -->
    <header>
        <nav>
            <h4>LOGO</h4>
            <ul>
                <li><a href="index.php">Menu</a></li>
                <li><a href="#">About</a></li>

                <?php
                
                if(isset($_SESSION["userusername"])){
                    echo"<li><a href='profile.php'>Profile Page</a></li>";
                    echo"<li><a href='includes/logout.include.php'>Log Out</a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Sign In</a></li>";
                }

                ?>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header ends here -->

    <!-- Section starts here -->
    <section>
