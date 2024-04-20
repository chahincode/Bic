<?php
session_start();

if (!isset($_SESSION['userId'])) {
    header('location:login.php');
    exit(); // Make sure to exit after redirection
}

// Include other required files
require "assets/DBFunctions.php";
require "assets/Database.php";

