<?php
include "..\..\Utilities\Header.php";
$con = new mysqli('localhost','root','','store');

$equipement = $_POST['Equipement'];
$model = $_POST['Model'];
$sn = $_POST['SN'];
$date = $_POST['date'];
$qt = $_POST['qt'];
$state = isset($_POST['State']) ? 1 : 0; // Checkbox value
$commentaire = $_POST['Commentaire'];


$sql = "insert into invotoriesmg (Equipement, modele, SN, Date_reception, Statue_reception, commentaire, Qt) values ('$equipement','$model','$sn','$date','$state','$commentaire','$qt')";
if ($con->query($sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}