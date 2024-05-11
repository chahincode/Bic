<?php include "..\..\Utilities\Header.php";
if (isset($_GET['catId'])) {
    $catId = $_GET['catId'];
    $array = $con->query("select * from categories where id='$catId'");
    $catArray = $array->fetch_assoc();
    $catName = $catArray['name'];
    $stockArray = $con->query("select * from inventeries where catId='$catArray[id]'");

} else {
    $catName = "All Inventeries";
    $stockArray = $con->query("select * from alocatebd");
}
?>

<?php
$id = $_GET["id"];
if (isset($_POST["submit"])) {
    echo "Trying to save ";
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

<h2>Inventorie&nbsp;:</h2>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th></th>
                <th>Equipement</th>
                <th>Modele</th>
                <th>SN</th>
                <th>Date de reception</th>
                <th>Statue de reception</th>
                <th>Location</th>
                <th>IP Adress</th>
                <th>MAC Adress</th>
                <th>Quantité</th>
                <th>Commentaire</th>
                <th>Date de mise en service</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php $i = 0;
        while ($row = $stockArray->fetch_assoc()) {
            $i = $i + 1;
            $id = $row['id'];
            ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <?php echo $row['Equipement']; ?>
                </td>
                <td>
                    <?php echo $row['modele']; ?>
                </td>
                <td>
                    <?php echo $row['SN']; ?>
                </td>
                <td>
                    <?php echo $row['Date_reception']; ?>
                </td>
                <td>
                    <?php echo $row['Statue_reception']; ?>
                </td>
                <td>
                    <?php echo $row['Location']; ?>
                </td>
                <td>
                    <?php echo $row['Adress_IP']; ?>
                </td>
                <td>
                    <?php echo $row['Mac_ADress']; ?>
                </td>
                <td>
                    <?php echo $row['Quantity_served2']; ?>
                </td>
                <td>
                    <?php echo $row['Commentaire']; ?>
                </td>
                <td>
                    <?php echo $row['Date_mise_en_service']; ?>
                </td>
                <td>
                    <button onclick="ShowModal(<?php echo $row["id"] ?>)" class="link-dark alocate"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3"> Allocate
                        </i></button>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>


<div class="container modal fade" id="AllocationModal" tabindex="-1" role="dialog">
    <form class="well form-horizontal" action=" " method="post" id="Allocation-form">

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

<script>
    function ShowModal(value) {
        console.log("hii" + value);
        fetch('API/Inventory/GetAllocation.php?invID='+value)
            .then(response => response.json())
            .then(data => {
                // Populate form fields
                const form = document.getElementById('Allocation-form');
                Array.from(form.elements).forEach(element => {
                    if (element.name in data[0]) {
                        element.value = data[0][element.name];
                    }
                });
            })
            .catch(error => console.error('Error:', error));
        $('#AllocationModal').modal('show');
    }
</script>