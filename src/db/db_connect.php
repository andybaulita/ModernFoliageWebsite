<?php
session_start();

// Database connection start 
$host = "localhost";
$user = "user";
$password = "password";
$dbname = "modernfoliage";

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
