<?php include "..\..\Utilities\Header.php"; ?>
<?php
if (isset($_GET['catId'])) {
    $catId = $_GET['catId'];
    $array = $con->query("select * from inventeriesmg where id='$catId'");
    $catArray = $array->fetch_assoc();
    $catName = $catArray['name'];
    $stockArray = $con->query("select * from inventeriesmg where catId='$catArray[id]'");
} else {
    $catName = "All Inventeries";
    $stockArray = $con->query("select * from invotoriesmg");
}
?>
<div class="content">
    <div class="tableBox">
        <table id="dataTable" class="table table-bordered table-striped" style="z-index: -1">
            <thead>
            <th>#</th>
            <th>Equipement</th>
            <th>modele</th>
            <th>SN</th>
            <th>Date_reception</th>
            <th>Statue_reception(JDE)</th>
            <th>commentaire</th>
            <th>Qt</th>
            <th>picture</th>
            <th></th>
            </thead>
            <tbody>
            <?php $i = 0;
            while ($row = $stockArray->fetch_assoc())
            {
            $i = $i + 1;
            $id = $row['id'];
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Equipement']; ?></td>
                <td><?php echo $row['modele']; ?></td>
                <td><?php echo $row['SN']; ?></td>
                <td><?php echo $row['Date_reception']; ?></td>
                <td><?php echo $row['Statue_reception']; ?></td>
                <td><?php echo $row['commentaire']; ?></td>
                <td><?php echo $row['Qt']; ?></td>
                <td><?php echo $row['pic']; ?></td>

                <td><a href="updateMG.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3">
                            <button>reception</button>
                        </i></a>

                    <a href="alocateMG.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3">
                            <button> alocate</button>
                        </i></a>
                </td>

                <div id="popupFormee" class="popup">
                    <form action="/submit_form" method="post" class="form">
                        <div class="form-group">
                            <label for="some" class="col-form-label"> Statut de reception</label>
                            <input type="checkbox" id="St" name="St" value="1">

                        </div>
                        <button type="submit" name="updatepr" class="btn btn-primary">update</button>
                        <br>
                        <button type="button" class="btn btn-primary" onclick="closeFormee()">Close</button>
                    </form>
                </div>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>  <!-- ending tag for content -->

<script src="Pages/Magazin/script.js"></script>
<link rel="stylesheet" type="text/css" href="Pages/Magazin/style.css">
  