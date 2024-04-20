<?php require "Utilities/Header.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>

  </style>
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
        <a href="inventeries.php"><li><i class="fa fa-circle-o fa-fw"></i> Inventeries</li></a>
       <a href="addnew.php"><li style="color: white"><i class="fa fa-circle-o fa-fw"></i> Add New Item</li></a>
       <a href="ADDitm.php"><li><i class="fa fa-circle-o fa-fw"></i> Add  Item</li></a>
       <a href="Layoutinj.php"><li><i class="fa fa-circle-o fa-fw"></i>PC_Injction </li></a>
       <a href="LayoutAss.php"><li><i class="fa fa-circle-o fa-fw"></i> PC_Assemblage</li></a>
        <!-- <a href="newsell"><li><i class="fa fa-circle-o fa-fw"></i> New Sell</li></a> -->
     
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
<div class="account" style="display: none;">
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
if (isset($_POST['saveProduct'])) {
if ($con->query("insert into inventeries1 (Date, Equipement,Model, SN, Location, Adressip, MacAdres, DateMS, Commentaire) values ('$_POST[date]','$_POST[Equipement]',,'$_POST[Model]''$_POST[SN]','$_POST[Location]','$_POST[IP]','$_POST[MAC]','$_POST[dateMS]','$_POST[Comment]')")) {
  $notice ="<div class='alert alert-success'>Successfully Saved</div>";

}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}
}

 ?>
  <div class="content2">
<ol class="breadcrumb ">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Add Product</li>
    </ol>
    <?php echo $notice ?>
    <div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">

      <h4>Add New Product</h4><hr>
      <form method="POST">
         <div class="form-group">
            <label for="some" class="col-form-label">Date</label>
            <input type="date" name="date" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Equipement</label>
            <input type="text" name="Equipement" class="form-control" id="Equipement" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Model</label>
            <input type="text" name="Model" class="form-control" id="Model" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">S\N</label>
            <input type="text" name="SN"  class="form-control" id="SN" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Location</label>
            <select class="form-control" required name="Location">
              <option selected disabled value="">Please Select Location</option>
            <?php getAllCat(); ?>   
            </select>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Adress IP</label>
            <input type="text" name="IP"  class="form-control" id="IP" required>
          </div>
          
          <div class="form-group">
            <label for="some" class="col-form-label"> Mac ADress</label>
            <input type="text" name="MAC"  class="form-control" id="MAC" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Date de mise en service</label>
            <input type="Date" name="dateMS"  class="form-control" id="dateMS" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Comment</label>
          <textarea class="form-control" name="Comment" required placeholder="Write some discription"></textarea> 
          </div>
          <div class="form-group">
            <label for="2" class="col-form-label">Picture</label>
            <input type="file" name="pic" class="form-control">
          </div>
          <div class="center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success">Reset</button>
          </div>
          
        </form>
    </div>
</div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>
