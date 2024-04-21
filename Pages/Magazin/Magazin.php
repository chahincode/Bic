<?php include "..\..\Utilities\Header.php"; ?>

<link rel="stylesheet" type="text/css" href="Pages/Magazin/style.css">
<script src="Pages/Magazin/script.js"></script>

<?php
$catName = "All Inventeries";
$stockArray = $con->query("select * from invotoriesmg");

?>

<div class="content">
    <a href="Pages/Magazin/ADDitmMG.php" onClick="return popup(this, 'notes')">
        <button>Ajouter</button>
    </a>
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
                <td>
                    <?php if ($row['Statue_reception'] == 0) {
                        echo "<span class=\"badge badge-success\"></span>";
                    } else {
                        echo '<span class="badge badge-success">Success</span>';
                    } ?>
                    </td>
                <td><?php echo $row['commentaire']; ?></td>
                <td><?php echo $row['Qt']; ?></td>
                <td>
                    <a <?php if ($row['Statue_reception'] == 0) {
                        echo 'href="Pages/Magazin/updateMG.php?id=' . $row['id'] . '"';
                    } else {
                        echo 'href="javascript:void(0)"';
                    } ?> class="link-dark">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"><button>Reception</button></i>
                    </a>

                    <a href="Pages/Magazin/alocateMG.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3">
                            <button> Alocate</button>
                        </i></a>
                    <a href="Pages/Magazin/Details.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                                class="fa-solid fa-pen-to-square fs-5 me-3">
                            <button> Details</button>
                        </i></a>

                </td>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
