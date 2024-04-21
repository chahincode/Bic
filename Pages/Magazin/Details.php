<?php include "..\..\Utilities\Header.php"; ?>

<?php
$id = $_GET["id"];
$catName = "All Inventeries";
$stockArray = $con->query("select * from invotoriesmg where id='$id'");
$selectedProduct = $stockArray->fetch_assoc();

?>


<p><?php echo $selectedProduct['id']; ?></p>
<p><?php echo $selectedProduct['Equipement']; ?></p>
<p><?php echo $selectedProduct['modele']; ?></p>
<p><?php echo $selectedProduct['SN']; ?></p>
<p><?php echo $selectedProduct['Date_reception']; ?></p>
<p><?php echo $selectedProduct['Statue_reception']; ?></p>
<p><?php echo $selectedProduct['commentaire']; ?></p>
<p><?php echo $selectedProduct['Qt']; ?></p>