<?php
include "..\..\Utilities\Header.php";
$con = new mysqli('localhost','root','','store');

$id = $_GET["id"];
$sql = "UPDATE `invotoriesmg` SET `Statue_reception`='1' WHERE id = $id";

$result = mysqli_query($con, $sql);

if ($result) {
} else {
    echo "Failed: " . mysqli_error($con);
}

?>
