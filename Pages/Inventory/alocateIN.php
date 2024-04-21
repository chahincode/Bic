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
            <label class="form-label">quantite_in_alocatebd</label>
            <input type="number" name="Quan2" id="Quan2" class="form-control"
                   value="<?php echo $row['Quantity_served2'] ?>">
        </div>

        <div class="mb-3">
            <label for="Quan3" class="form-label">Quantite_a_servie</label>
            <input type="number" name="Quan3" id="Quan3" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="some" class="col-form-label">Location</label>
            <select class="form-control" required name="Location">
                <option selected disabled value="">Please Select Location</option>
                <option value="Scrap" id="Scrap">Scrap</option>
                <option value="IT_Magasin">IT_Magasin</option>

            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">adresse_IP:</label>
            <input type="text" class="form-control" name="adresse_IP">
        </div>

        <div class="mb-3">
            <label class="form-label">adresse_MAC:</label>
            <input type="text" class="form-control" name="adresse_MAC">
        </div>

        <div class="mb-3">
            <label class="form-label">commentaire:</label>
            <input type="text" class="form-control" name="commentaire">
        </div>

        <div class="mb-3">
            <label class="form-label">Date_mise_en_service:</label>
            <input type="date" class="form-control" name="Date_mise_en_service">
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Alocate</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
</div>

