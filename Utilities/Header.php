<?php
session_start();

if (!isset($_SESSION['userId'])) {
    header('location:login.php');
    exit(); // Make sure to exit after redirection
}

// Include other required files
require __DIR__ . "\..\assets\DBFunctions.php";
require __DIR__ . "\..\assets\Database.php";

