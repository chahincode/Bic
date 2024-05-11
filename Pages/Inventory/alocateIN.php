<?php include "..\..\Utilities\Header.php" ?>
<?php
$id = $_GET["id"];
if (isset($_POST["submit"])) {
    $Equipement = $_POST['Equipement'];
    $modele = $_POST['modele'];
    $SN = $_POST['SN'];
    $Date_reception = $_POST['Date_reception'];
    $commentaire = $_POST['commentaire'];
    $Quan2 = $_POST['Quan2'];
    $Quan3 = $_POST['Quan3'];
    $per = $Quan2 - $Quan3;
    if ($Quan2 === $Quan3) {
        $sql = "INSERT INTO `invotoriesmg`(`id`,`catId`, `Equipement`, `modele`, `SN`, `Date_reception`, `Statue_reception`, `commentaire`, `Qt`) VALUES (NULL,1,'$Equipement','$modele','$SN','$Date_reception',1,'$_POST[commentaire]','$_POST[Quan2]') ";
        $result = mysqli_query($con, $sql);

        $sql = "DELETE FROM `alocatebd` WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: index.php?msg=Data updated successfully");
        } else {
            echo "Failed: " . mysqli_error($con);
        }
    } elseif ($Quan2 > $Quan3) {

        $sql = "INSERT INTO `invotoriesmg`(`id`,`catId`, `Equipement`, `modele`, `SN`, `Date_reception`, `Statue_reception`, `commentaire`, `Qt`) VALUES (NULL,1,'$Equipement','$modele','$SN','$Date_reception',1,'$_POST[commentaire]','$_POST[Quan3]') ";

        $result = mysqli_query($con, $sql);
        $sql = "UPDATE `alocatebd` SET `Quantity_served2`='$per' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: index.php?msg=Data updated successfully");
        } else {
            echo "Failed: " . mysqli_error($con);
        }
    } elseif ($Quan2 < $Quan3) {
        $message = "Quantite erueur";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>

<?php
$sql = "SELECT * FROM `alocatebd` WHERE id = $id LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>

<head>
    <title>
        <?php echo siteTitle(); ?>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/customStyle.css">
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</head>

<body>


    <div class="container">
        <form class="well form-horizontal" action=" " method="post" id="contact-form">

            <h2><b>Allocate :</b></h2>
            <div class="row">

                <div class="form-group col col-md-12">
                    <label class="form-label">Equipement:</label>
                    <input type="text" class="form-control" name="Equipement">
                </div>

                <div class="groupe col col-md-4">
                    <label class="form-label">Modele:</label>
                    <input type="text" class="form-control" name="modele">
                </div>
                <div class="groupe col col-md-4">
                    <label class="form-label">SN:</label>
                    <input type="text" class="form-control" name="SN">
                </div>
                <div class="groupe col col-md-4">
                    <label class="form-label">Date de reception:</label>
                    <input type="date" class="form-control" name="Date_reception">
                </div>

                <div class="groupe col col-md-4">
                    <label class="form-label">Quantité allouée</label>
                    <input type="number" name="Quan2" id="Quan2" class="form-control">
                </div>

                <div class="groupe col col-md-4">
                    <label for="Quan3" class="form-label">Quantite a servie</label>
                    <input type="number" name="Quan3" id="Quan3" class="form-control" required>
                </div>


                <div class="form-group col col-md-4">
                    <label for="some" class="form-label">Location</label>
                    <select class="form-control" required name="Location">
                        <option selected disabled value="">Please Select Location</option>
                        <option value="Scrap" id="Scrap">Scrap</option>
                        <option value="IT_Magasin">IT Magasin</option>

                    </select>
                </div>

                <div class="groupe col col-md-4">
                    <label class="form-label">Adresse IP:</label>
                    <input type="text" class="form-control" name="Adress_IP">
                </div>

                <div class="groupe col col-md-4">
                    <label class="form-label">Adresse MAC:</label>
                    <input type="text" class="form-control" name="Mac_ADress">
                </div>
                <div class="groupe col col-md-4">
                    <label class="form-label">Date de mise en service:</label>
                    <input type="date" class="form-control" name="Date_mise_en_service">
                </div>

                <div class="groupe col col-md-12">
                    <label class="form-label">Commentaire:</label>
                    <textarea type="text" class="form-control" name="Commentaire"></textarea>
                </div>

                <div class="col col-md-12 boutons">
                    <div class="label"></div>
                    <button type="submit" class="btn btn-success" name="submit">Alocate</button>
                    <button class="btn btn-danger"><a href="index.php">Cancel</a></button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>