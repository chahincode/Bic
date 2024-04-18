
<?php
session_start();

if(!isset($_SESSION['userId']))
{
  header('location:login.php');
}

 ?>
<?php require "assets/function.php" ?>
<?php require 'assets/db.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="js/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>
  .form-popup {

display: none;

position: fixed;

bottom: 0;

right: 15px;

border: 3px solid #f1f1f1;

z-index: 9;

}
  </style>

</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<div class="dashboard" style="position: fixed;width: 18%;height: 100%;background:#222D32">
  <div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
    <a href="index.php" style="color: white;text-decoration: none;"><?php echo strtoupper(siteName()); ?> </a>
  </div>
  <div class="flex" style="padding: 3px 7px;margin:5px 2px;">
    <div><img src="photo/<?php echo $user['pic'] ?>" class='img-circle' style='width: 77px;height: 66px'></div>
    <div style="color:lightgreen;font-size: 13pt;padding: 14px 7px;margin-left: 11px;"><?php echo ucfirst($user['name']); ?></div>
  </div>
  <div style="background: #1A2226;font-size: 10pt;padding: 11px;color: #79978F">MAIN NAVIGATION</div>
  <div>
    <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-dashboard fa-fw"></i> Dashboard</span></div>
    <div class="item">
      <ul class="nostyle zero">
        <a href="index.php"><li ><i class="fa fa-circle-o fa-fw"></i> Home</li></a>
        <a href="inventeries.php"><li style="color: white"><i class="fa fa-circle-o fa-fw"></i> Inventeries</li></a>
       <a href="addnew.php"><li><i class="fa fa-circle-o fa-fw"></i> Add New Item</li></a>
     <!--    <a href="newsell"><li><i class="fa fa-circle-o fa-fw"></i> New Sell</li></a> -->
        <a href="reports.php"><li><i class="fa fa-circle-o fa-fw"></i> Report</li></a>
      </ul><
    </div>
  </div>
  <div style="background:#1E282C;color: white;padding: 13px 17px;border-left: 3px solid #3C8DBC;"><span><i class="fa fa-globe fa-fw"></i> Other Menu</span></div>
  <div class="item">
      <ul class="nostyle zero">
        <a href="sitesetting.php"><li><i class="fa fa-circle-o fa-fw"></i> Site Setting</li></a>
       <a href="profile.php"><li><i class="fa fa-circle-o fa-fw"></i> Profile Setting</li></a>
        <a href="accountSetting.php"><li><i class="fa fa-circle-o fa-fw"></i> Account Setting</li></a>
        <a href="logout.php"><li><i class="fa fa-circle-o fa-fw"></i> Sign Out</li></a>
      </ul><
    </div>
</div>
<div class="marginLeft" >
  <div style="color:white;background:#3C8DBC" >
    <div class="pull-right flex rightAccount" style="padding-right: 11px;padding: 7px;">
      <div><img src="photo/<?php echo $user['pic'] ?>" style='width: 41px;height: 33px;' class='img-circle'></div>
      <div style="padding: 8px"><?php echo ucfirst($user['name']) ?></div>
    </div>
    <div class="clear"></div>
  </div>
<div class="account" style="display: none;z-index: 6">
  <div style="background: #3C8DBC;padding: 22px;" class="center">
    <img src="photo/<?php echo $user['pic'] ?>" style='width: 100px;height: 100px; margin:auto;' class='img-circle img-thumbnail'>
    <br><br>
    <span style="font-size: 13pt;color:#CEE6F0"><?php echo $user['name'] ?></span><br>
    <span style="color: #CEE6F0;font-size: 10pt">Member Since:<?php echo $user['date']; ?></span>
  </div>
  <div style="padding: 11px;">
    <a href="profile.php"><button class="btn btn-default" style="border-radius:0">Profile</button>
    <a href="logout.php"><button class="btn btn-default pull-right" style="border-radius: 0">Sign Out</button></a>
  </div>
</div>
<?php 

if (isset($_GET['catId']))
{
  $catId = $_GET['catId'];
  $array = $con->query("select * from categories where id='$catId'");
  $catArray =$array->fetch_assoc();
  $catName = $catArray['name'];
  $stockArray = $con->query("select * from inventeries where catId='$catArray[id]'");
 

}
else
{
  $catName = "All Inventeries";
  $stockArray = $con->query("select * from invotoriesmg");
}
  include 'assets/bill.php';
 ?>
  <div class="content">
   <ol class="breadcrumb ">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?php echo $catName ?></li>
        
        <a href="ADDitmMG.php" onClick="return popup(this, 'notes')"><button>Ajouter</button></a>
<SCRIPT TYPE="text/javascript">
  function popup(mylink, windowname) {
    if (! window.focus)return true;
    var href;
    if (typeof(mylink) == 'string') href=mylink;
    else href=mylink.href; 
    window.open(href, windowname, 'width=400,height=200,scrollbars=yes'); 
    return false; 
  }
  

</SCRIPT>
    </ol>
  <div class="tableBox" >
    <table id="dataTable" class="table table-bordered table-striped" style="z-index: -1">
      <thead>
        <th>#</th>
        <th>Equipement</th>
        <th>modele</th>
        <th>SN</th>
        <th>Date_reception</th>
        <th>Statue_reception</th>
        <th>commentaire</th>
        <th>Qt</th>
        
        <th></th>
      </thead>
     <tbody>
      <?php $i=0;
        while ($row = $stockArray->fetch_assoc()) 
        { 
          $i=$i+1;
          $id = $row['ID'];
        $t=0;
        ?>
          <tr onclick="getValue(this,t)">
            <td ><?php echo $row['ID']; ?></td> 
            <td><?php echo $row['Equipement']; ?></td>
            <td><?php echo $t ?></td>
            <td><?php echo $row['modele']; ?></td>
            <td><?php echo $row['SN']; ?></td>
            <td><?php echo $row['Date_reception']; ?></td>
            <td ><?php echo $row['Statue_reception']; ?></td>
            <td><?php echo $row['commentaire']; ?></td>
            <td><?php echo $row['Qt']; ?></td>

            <td ><button onclick="openFormee()">UPDATE</button></td>
            <td >
            <div id="popupFormee" class="popup">
    <form action="/submit_form" method="post" class="form">
      <div class="form-group">
            <label for="some" class="col-form-label"> Statut de reception</label>
            <input type="checkbox" id="St" name="St"  value="1" >
           
          </div>
          <button type="submit" name="updatepr" class="btn btn-primary">update</button> <br>
      <button type="button" class="btn btn-primary" onclick="closeFormee()">Close</button>
    </form>
  </div>



<script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if (isset($_POST['up'])) {
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = "UPDATE invotoriesmg SET Equipement='OUSSAMA' WHERE id=10";
 
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
} }
$conn->close();
?>
function openForm() {

  document.getElementById("myForm").style.display = "block";

}

 

function closeForm() {

  document.getElementById("myForm").style.display = "none";

}

</script>        
      <?php
        }
       ?>
     </tbody>
    </table>
  </div>                      
  </div>  <!-- ending tag for content -->

</div> <!-- ending tag for margin left -->



</body>
</html><script>
function getValue(row,t) {
    
    var table = document.getElementById("dataTable");
    var selectedRow = table.rows[row.rowIndex];
    var selectedValueID = selectedRow.cells[0].innerText;
    $t= selectedValueID;
    } 

    function getValue1(row) {
    
    var table = document.getElementById("dataTable");
    var selectedRow = table.rows[row.rowIndex];
    var selectedValueStat = selectedRow.cells[5].innerText;
    return selectedValueStat;
  } 
    function openFormee() {
    document.getElementById("popupFormee").style.display = "block";
  }
  
  function closeFormee() {
    document.getElementById("popupFormee").style.display = "none";
  };
    </script>
     <style>
.popup {
  display: none;
  position: fixed;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  width: 300px;
  height: 200px;
  background: #fff;
  padding: 20px;
  border: 1px solid #000;
  box-sizing: border-ébox;
}

.form {
  display: flex;
  flex-direction: column;
}

.cancel {
  align-self: flex-end;
}
  </style>
  <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>