<?php $i = 0;
while ($row = $stockArray->fetch_assoc()) {
    $i = $i + 1;
    $id = $row['id'];
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['Equipement']; ?></td>
        <td><?php echo $row['modele']; ?></td>
        <td><?php echo $row['SN']; ?></td>
        <td><?php echo $row['Date_reception']; ?></td>
        <td><?php echo $row['Statue_reception']; ?></td>
        <td><?php echo $row['Location']; ?></td>
        <td><?php echo $row['Adress_IP']; ?></td>
        <td><?php echo $row['Mac_ADress']; ?></td>
        <td><?php echo $row['Quantity_served2']; ?></td>
        <td><?php echo $row['Commentaire']; ?></td>
        <td><?php echo $row['Date_mise_en_service']; ?></td>
        <td>
            <a href="Pages/Inventory/alocateIN.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                    class="fa-solid fa-pen-to-square fs-5 me-3">
                    <button>alocate</button>
                </i></a>
        </td>
        <td>
            <a  href="Utilities/delete.php?item=<?php echo $row['id'] ?>" class="link-dark"><i
                        class="fa-solid fa-pen-to-square fs-5 me-3">
                    <button>Delete</button>
                </i></a>
        </td>
    </tr>
    <?php
}
?>
