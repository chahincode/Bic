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
            <a href="alocateIN.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                    class="fa-solid fa-pen-to-square fs-5 me-3">
                    <button>alocate</button>
                </i></a>
        </td>

        <?php
        if (!empty($_SESSION['bill'])) {

            foreach ($_SESSION['bill'] as $key => $value) {
                if (in_array($row['id'], $_SESSION['bill'][$key])) {
                    echo "<td>Selected</td>";
                    break;
                } else {
                    ?>
                    <?php break;
                }
            }
        } else { ?>
            <td id='selection<?php echo $i; ?>'></td>
        <?php } ?>
        <td colspan="center"><a
                href="delete.php?item=<?php echo $row['id'] ?>&url=<?php echo $_SERVER['QUERY_STRING'] ?>"></a>
        </td>
    </tr>
    <?php
}
?>
