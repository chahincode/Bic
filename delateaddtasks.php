<?php
include "db_conn.php";
$id = $_GET["id"];






$id = $_GET["id"];
if (isset($_POST["submit"])) {
  $Statue_reception= $_POST['tasks'];
  $Statue_reception= $_POST['commentaire'];

 


  $sql = "DELETE FROM `addtasksbd` WHERE id = $id"; 
   $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location:add_tasks.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($con);
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
    $sql = "SELECT * FROM `addtasksbd` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3"><center> 
          <div class="col">
            <label class="form-label">vous voulez vraiment supprimer </label>
             
            <input type="checkbox" id="Sta"  name="name_computer"  value="<?php echo $row['tasks'] ?>" >
            
          
             </div>

       

       
        <div>
          <button type="submit" class="btn btn-success" name="submit">delate</button>
          <a href="add_tasks.php" class="btn btn-danger">Cancel</a>
          </center>
        </div>
        
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>