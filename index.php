<?php require "Utilities/Header.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo siteTitle(); ?>
    </title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/customStyle.css">
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</head>

<body style="background: #ECF0F5;padding:0;margin:0">
    <div class="inventories-page">
        <div class="bloc-sidbar">
            <?php include ('Components/SideBar.php'); ?>
        </div>
        <div class="topBar-table">
            <?php include ('Components/TopBar/TopBar.php'); ?>
            <div id="pageContent"></div>
        </div>
    </div>
</body>

</html>
<script src="Pages/Home/script.js"></script>