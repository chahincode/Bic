  .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            z-index: 9999;}

            <button onclick="togglePopup()">Ajout er</button>
<div id="popup" class="popup" class="center">
    <form action="traitement.php" method="POST">
        <label for="nom">titre :</label>
        <input type="text" name="nom" id="nom"><br><br>
        <label for="commentaire">Commentaire :</label><br>
        <textarea name="commentaire" id="commentaire" rows="4" cols="49"></textarea><br><br>
      
        <button type="submit" class="btn btn-success" name="submit">Alocate</button>
          <button type="reset" class="btn btn-success">Reset</button>
            <a href="add_tasks.php" class="btn btn-danger">Cancel</a>
          
    </form>
</div>


<?php 
if (isset($_POST["submit"]))  {
  $id = $_POST['id'];
  $tasks= $_POST['tasks'];
  $commentaire= $_POST['commentaire'];
  
  
  $sql = "INSERT INTO `addtasksbd`(`id`, `tasks`, `commentaire`) VALUES (NULL,'$_POST[tasks]','$_POST[commentaire]') ";
  $result = mysqli_query($conn, $sql);

}
 ?>

<script>
    function togglePopup() {
        var popup = document.getElementById("popup");
        if (popup.style.display === "none") {
            popup.style.display = "block";
        } else {
            popup.style.display = "none";
        }
    }
</script>