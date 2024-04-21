<?php require "../../Utilities/Header.php" ?>

<?php
$notice = "";
if (isset($_POST['saveSetting'])) {
    if ($con->query("update site SET title='$_POST[title]',name='$_POST[name]'")) {
        $notice = "<div class='alert alert-success'>Successfully Saved</div>";
    } else {
        $notice = "<div class='alert alert-danger'>Error is:" . $con->error . "</div>";
    }
}
?>

<?php echo $notice ?>
<div style="width: 55%;margin: auto;padding: 22px;" class="well well-sm center">
    <h4>Site Setting</h4>
    <hr>
    <form method="POST">
        <div class="form-group">
            <label for="some" class="col-form-label">Site Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo siteTitle() ?>" id="some" required>
        </div>
        <div class="form-group">
            <label for="some" class="col-form-label">Site Name</label>
            <input type="text" name="name" value="<?php echo siteName() ?>" class="form-control" id="some" required>
        </div>
        <div class="center">
            <button class="btn btn-primary btn-sm btn-block" name="saveSetting">Save Setting</button>
        </div>
    </form>
</div>


