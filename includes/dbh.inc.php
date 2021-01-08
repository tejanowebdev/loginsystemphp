<?php

// credential
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "phpproject01";

// Procedural PHP project > mysqli - updated version of mysql, mysql is not secure

// connect to db
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failes: " . mysqli_connect_error());
}