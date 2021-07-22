<?php

$serverName = "localhost"; 
$dbUsername = "root";
$password = "";
$dbName = "loginsyst";

$connect = mysqli_connect($serverName, $dbUsername, $password, $dbName);

// Display error when the connection fails

if(!$connect){
    die("connection failed: ". $mysqli_connect_error());
}