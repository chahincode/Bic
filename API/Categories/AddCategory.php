<?php
include "..\..\Utilities\Header.php";
$con = new mysqli('localhost','root','','store');

$filename = $_FILES['inPic']['name'];
move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/" . $_FILES["inPic"]["name"]);

$sql = "insert into categories (name,pic) value ('$_POST[inName]','$filename'))";
if ($con->query($sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}