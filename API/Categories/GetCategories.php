<?php
include "..\..\Utilities\Header.php";
$con = new mysqli('localhost','root','','store');
$sql = "SELECT categories.*, COUNT(alocatebd.Location) AS invCount FROM categories JOIN alocatebd ON categories.name = alocatebd.Location GROUP BY categories.name;";
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
