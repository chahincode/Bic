<?php require "Utilities/Header.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo siteTitle(); ?></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/customStyle.css">
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<?php include('Components/SideBar.php'); ?>
<?php include('Components/TopBar/TopBar.php'); ?>
<div class=" marginLeft content2" id="pageContent"></div>
</body>
</html>
<script src="Pages/Home/script.js"></script>

