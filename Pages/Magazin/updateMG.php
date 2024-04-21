<?php require "../../Utilities/Header.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo siteTitle(); ?></title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/customStyle.css">
  <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/".$_FILES["inPic"]["name"]);
    if ($con->query("insert into categories (name,pic) value ('$_POST[name]','$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$con->error."</div>";
  }

   ?>
</head>
<?php
$id = $_GET["id"];
if (isset($_POST["submit"])) {
  $Statue_reception= $_POST['Statue_reception'];
  $sql = "UPDATE `invotoriesmg` SET `Statue_reception`='1' WHERE id = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {
  } else {
    echo "Failed: " . mysqli_error($con);
  }
}

?>

<div class="content2">
<ol class="breadcrumb ">
        <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Product</li>
    </ol>
    <?php echo $notice ?>
    <div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">
      <h4>update</h4><hr>
      <form method="POST">
          <div class="form-group">
            <label for="some" class="col-form-label"> Statut de reception</label>
            
            <input type="checkbox" id="Sta" name="Statue_reception"  value="1" >
            
          </div>
          <div class="center">
          <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="Magazin.php" class="btn btn-danger">Cancel</a>
        </div>
          </div>
          
        </form>
    </div>
</div>

</body>
</html>

