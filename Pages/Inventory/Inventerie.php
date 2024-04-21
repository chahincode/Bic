<?php include "..\..\Utilities\Header.php";
if (isset($_GET['catId'])) {
    $catId = $_GET['catId'];
    $array = $con->query("select * from categories where id='$catId'");
    $catArray = $array->fetch_assoc();
    $catName = $catArray['name'];
    $stockArray = $con->query("select * from inventeries where catId='$catArray[id]'");

} else {
    $catName = "All Inventeries";
    $stockArray = $con->query("select * from alocatebd");
}
?>

<div class="content">
    <div class="tableBox">
        <table id="dataTable" class="table table-bordered table-striped" style="z-index: -1">
            <thead>
            <th>#</th>
            <th>Equipement</th>
            <th>modele</th>
            <th>SN</th>
            <th>Date_reception</th>
            <th>Statue_reception</th>
            <th>Location</th>
            <th>IP Adress</th>
            <th>MAC Adress</th>
            <th>Quantity</th>
            <th>Commentaire</th>
            <th>Date_mise_en_service</th>
            <th></th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            <?php include "./Methods/ShowTable.php"; ?>
            </tbody>
        </table>
    </div>
</div>  <!-- ending tag for content -->

<script src="Pages/Inventory/script.js"></script>