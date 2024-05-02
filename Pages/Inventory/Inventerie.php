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

<!-- <div class="content">
    <div class="tableBox"> -->
<h2>Inventorie&nbsp;:</h2>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th></th>
                <th>Equipement</th>
                <th>Modele</th>
                <th>SN</th>
                <th>Date de reception</th>
                <th>Statue de reception</th>
                <th>Location</th>
                <th>IP Adress</th>
                <th>MAC Adress</th>
                <th>Quantité</th>
                <th>Commentaire</th>
                <th>Date de mise en service</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php include "./Methods/ShowTable.php"; ?>
        </tbody>
    </table>
</div>
<!-- </div>
</div>  -->
<!-- ending tag for content -->

<script src="Pages/Inventory/script.js"></script>