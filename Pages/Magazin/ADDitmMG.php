<?php require "../../Utilities/Header.php" ?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo siteTitle(); ?></title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/customStyle.css">
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic'];
    move_uploaded_file($_FILES["inPic"], "photo/".$_FILES["inPic"]);
    if ($con->query("insert into invotoriesmg (pic) value (,'$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$con->error."</div>";
  }

   ?>
</head>




<?php 
if (isset($_POST['saveProduct'])) {
  $State = isset($_POST['State']) ? intval($_POST['State']) : 0;
if ($con->query("insert into invotoriesmg (Equipement, modele, SN, Date_reception, Statue_reception, commentaire, Qt,pic) values ('$_POST[Equipement]','$_POST[Model]','$_POST[SN]','$_POST[date]',' $State ','$_POST[Commentaire]','$_POST[qt]','$_POST[pic]')")) {
  $notice ="<div class='alert alert-success'>Successfully Saved</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}
}

 ?>
  <div class="content2">
<ol class="breadcrumb ">
        <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Magazin</a></li>
        <li class="active">Add Product</li>
    </ol>
    <?php echo $notice ?>
    <div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">

      <h4>Ajouter Au Magasin</h4><hr>
      <form method="POST">
      <div class="form-group">
            <label for="some" class="col-form-label">Equipement :</label>
            <input type="text" name="Equipement" class="form-control" id="Equipement" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Model :</label>
            <input type="text" name="Model" class="form-control" id="Model" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">S\N :</label>
            <input type="text" name="SN"  class="form-control" id="SN" >
          </div>

         <div class="form-group">
            <label for="some" class="col-form-label">Date de reception :</label>
            <input type="date" name="date" class="form-control" id="date" required>
          </div>
         
          <div class="form-group">
            <label for="some" class="col-form-label">Quantité :</label>
            <input type="number" name="qt"  class="form-control" id="qt" required>
          </div>

          <div class="form-group">
            <label for="some" class="col-form-label">Picture :</label>
            <input type="file" name="pic"  class="form-control" id="pic" required>
          </div>

          <div class="form-group">
              <label for="some" class="col-form-label">Reception :</label>
              <input type="checkbox" id="State" name="State"  value="1" >
          </div>

          <div class="form-group">
              <label for="some" class="col-form-label">Commentaire :</label>
              <input type="text" name="Commentaire"  class="form-control" id="Commentaire" >
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
