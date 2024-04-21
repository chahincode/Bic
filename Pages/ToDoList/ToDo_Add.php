<?php require "../../Utilities/Header.php" ?>

<?php
$notice = "";
if (isset($_POST['safeIn'])) {
    $filename = $_FILES['inPic'];
    move_uploaded_file($_FILES["inPic"], "photo/" . $_FILES["inPic"]);
    if ($con->query("insert into invotoriesmg (pic) value (,'$filename')")) {
        $notice = "<div class='alert alert-success'>Successfully Saved</div>";
    } else
        $notice = "<div class='alert alert-danger'>Not saved Error:" . $con->error . "</div>";
}
?>

<?php
if (isset($_POST['saveProduct'])) {
    $State = isset($_POST['State']) ? intval($_POST['State']) : 0;
    if ($con->query("insert into addtasksbd (tasks,commentaire) values ('$_POST[tasks]','$_POST[commentaire]')")) {
        $notice = "<div class='alert alert-success'>Successfully Saved</div>";
    } else {
        $notice = "<div class='alert alert-danger'>Error is:" . $con->error . "</div>";
    }
}

?>
<?php echo $notice ?>
<div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">

    <h4>Crée une nouvelle Tache </h4>
    <hr>
    <form method="POST">
        <div class="form-group">
            <label for="some" class="col-form-label">tasks todo:</label>
            <input type="text" name="tasks" class="form-control" id="tasks" required>
        </div>

        <div class="form-group">
            <label for="comment">Enter your comment:</label><br>
            <textarea id="commentaire" name="commentaire" rows="4" cols="50"></textarea><br>
        </div>
        <div class="center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success">Reset</button>
            <a href="add_tasks.php" class="btn btn-danger">Cancel</a>
        </div>

    </form>
</div>
