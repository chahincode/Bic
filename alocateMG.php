
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
  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <style type="text/css">
  <?php include 'css/customStyle.css'; ?>

  </style>
  
<?php
include "db_conn.php";
$id = $_GET["id"];





if (isset($_POST["submit"])) {
  $Equipement= $_POST['Equipement'];
  $modele= $_POST['modele'];
  $SN= $_POST['SN'];
  $Date_reception= $_POST['Date_reception'];
  $Statue_reception= $_POST['Statue_reception'];
  $commentaire= $_POST['commentaire'];
 
  
    

  $Quan= $_POST['Quan'];
  $Quan2= $_POST['Quan2'];
  
  $per=$Quan-$Quan2;


  if ($Quan===$Quan2){

  

  $sql = "INSERT INTO `alocatebd`(`id`, `Equipement`, `modele`, `SN`, `Date_reception`,`Statue_reception`, `Location`, `Adress_IP`, `Mac_ADress`,`Quantity_served2`,`name_computer`,`name_user`, `Commentaire`, `Date_mise_en_service`) VALUES (NULL,'$Equipement','$modele','$SN','$Date_reception','$Statue_reception','$_POST[Location]','$_POST[adresse_IP]','$_POST[adresse_MAC]','$_POST[name_computer]','$_POST[name_user]','$Quan2','$_POST[commentaire]','$_POST[Date_mise_en_service]') ";
  $result = mysqli_query($conn, $sql);

  $sql = "DELETE FROM `invotoriesmg` WHERE id = $id"; 
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: invotoriesMG.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}


elseif($Quan>$Quan2){

  $sql = "INSERT INTO `alocatebd`(`id`, `Equipement`, `modele`, `SN`, `Date_reception`, `Statue_reception`,`Location`, `Adress_IP`, `Mac_ADress`,`Quantity_served2`,`name_computer`,`name_user`, `Commentaire`, `Date_mise_en_service`) VALUES (NULL,'$Equipement','$modele','$SN','$Date_reception','$Statue_reception','$_POST[Location]','$_POST[adresse_IP]','$_POST[adresse_MAC]','$Quan2','$_POST[name_computer]','$_POST[name_user]','$_POST[commentaire]','$_POST[Date_mise_en_service]') ";
  $result = mysqli_query($conn, $sql);
  

$Qt= $_POST['Qt'];
$S=$Qt-$Quan2;
$sql = "UPDATE `invotoriesmg` SET `Qt`='$per' WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: invotoriesMG.php?msg=Data updated successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}
$message = "$S";
echo "<script type='text/javascript'>alert('$message');</script>";
}
elseif($Quan<$Quan2){
  $message = "Quantite erueur";
  echo "<script type='text/javascript'>alert('$message');</script>";

}



}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
</head>

<body>
  <nav style="background: #ECF0F5;padding:0;margin:0">
  
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `invotoriesmg` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Equipement:</label>
            <input type="text" class="form-control" name="Equipement" value="<?php echo $row['Equipement'] ?>">
          </div>

          <div class="col">
            <label class="form-label">modele:</label>
            <input type="text" class="form-control" name="modele" value="<?php echo $row['modele'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">SN:</label>
          <input type="text" class="form-control" name="SN" value="<?php echo $row['SN'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Date_reception:</label>
          <input type="date" class="form-control" name="Date_reception" value="<?php echo $row['Date_reception'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Statue_reception:</label>
          <input type="number" class="form-control" name="Statue_reception" value="<?php echo $row['Statue_reception'] ?>">
        </div>
       
        <div class="mb-3">
        <label class="form-label">Quantity en stock:</label>
            <input type="number" name="Quan" id="Quan"  class="form-control" value="<?php echo $row['Qt'] ?>">
          </div>

          <div class="mb-3">
        <label for="Quan2" class="form-label">Quantity_served2:</label>
            <input type="number" name="Quan2" id="Quan2"  class="form-control" required>
          </div>


        <div class="form-group">
              <label for="some" class="col-form-label">Location</label>
            <select class="form-control" required name="Location">
              <option selected disabled value="">Please Select Location</option>
              <option value="Administration">Administration</option>
              <option value="IT_Magasin">IT_Magasin</option>
              <option value="Production_Injection">Production_Injection</option>
              <option value="Production_Asemblage">Production_Asemblage</option>
            </select>
          </div>

          <div class="mb-3">
          <label class="form-label">adresse_IP:</label>
          <input type="text" class="form-control" name="adresse_IP">
        </div>


        
        <div class="mb-3">
          <label class="form-label">adresse_MAC:</label>
          <input type="text" class="form-control" name="adresse_MAC" >
        </div>


     
        <div class="mb-3">
          <label class="form-label">name of computer:</label>
          <input type="text" class="form-control" name="name_computer" >
        </div>

        <div class="mb-3">
          <label class="form-label">name of user(s):</label>
          <input type="text" class="form-control" name="name_user" >
        </div>

        

        <div class="mb-3">
          <label class="form-label">commentaire:</label>
          <input type="text" class="form-control" name="commentaire" >
        </div>
        
        <div class="mb-3">
          <label class="form-label">Date_mise_en_service:</label>
          <input type="date" class="form-control" name="Date_mise_en_service" >
        </div>
      

        <div>
          <button type="submit" class="btn btn-success" name="submit">Alocate</button>
          <a href="invotoriesMG.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>