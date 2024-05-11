<?php
include "..\..\Utilities\Header.php";

function Getallocation($invID){
    $con = new mysqli('localhost','root','','store');
    $sql = "SELECT * FROM `alocatebd` WHERE id = $invID LIMIT 1";
    $result = mysqli_query($con, $sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return json_encode($data);
}

if (isset($_GET['invID'])) {
    // Call the function with the parameter and echo the result
    echo Getallocation($_GET['invID']);
} else {
    // Handle error if parameter is not passed
    echo json_encode(array('error' => 'Parameter is missing'));
}
