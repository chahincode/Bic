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
if ($con->query("insert into addtasksbd (tasks,commentaire) values ('$_POST[tasks]','$_POST[commentaire]')")) {
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

      <h4>Ajouter Au Magasin</h4><hr>
      <form method="POST">
      <div class="form-group">
            <label for="some" class="col-form-label">tasks todo:</label>
            <input type="text" name="tasks" class="form-control" id="tasks" required>
          </div>
          
          <div class="form-group">
          <label for="comment">Enter your comment:</label><br>
          <textarea id="commentaire" name="commentaire" rows="4" cols="50"></textarea><br>
          </div>

        
 

        
          <div class="center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save&Add_New</button>
            <button type="reset" class="btn btn-success">Reset</button>
            <a href="add_tasks.php" class="btn btn-danger">Cancel</a>
          </div>
          
        </form>
    </div>
</div>

</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){$(".rightAccount").click(function(){$(".account").fadeToggle();});});
</script>
