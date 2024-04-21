<?php require "../../Utilities/Header.php" ?>

<?php
$notice = "";
if (isset($_POST['saveSetting'])) {
    if ($con->query("update users SET name='$_POST[name]',number='$_POST[number]' where id='$_SESSION[userId]'")) {
        $notice = "<div class='alert alert-success'>Successfully Saved</div>";
        header("location:profile.php?notice=Successfully saved");
    } else {
        $notice = "<div class='alert alert-danger'>Error is:" . $con->error . "</div>";
    }
}
if (isset($_GET['notice'])) {
    $notice = "<div class='alert alert-success'>Successfully Saved</div>";
}
?>


<?php echo $notice ?>
<div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">

    <h4>Profile Setting</h4>
    <hr>
    <form method="POST">
        <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $user['name'] ?>" id="some" required>
        </div>
        <div class="form-group">
            <label for="some" class="col-form-label">Number</label>
            <input type="text" name="number" value="<?php echo $user['number'] ?>" class="form-control" id="some"
                   required>
        </div>
        <div class="center">
            <button class="btn btn-primary btn-sm btn-block" name="saveSetting">Save Setting</button>
        </div>
    </form>
</div>
