<?php
include "..\..\Utilities\Header.php";
$con = new mysqli('localhost','root','','store');
$sql = "SELECT * FROM invotoriesmg";
$result = $con->query($sql);

// Prepare an array to hold the data
$data = array();

// Fetch associative array
while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Encode the data as JSON
echo json_encode($data);
?>
