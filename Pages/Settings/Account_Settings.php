<?php require "../../Utilities/Header.php" ?>
<?php
$notice = "";
if (isset($_POST['saveSetting'])) {
    if ($con->query("update users SET email='$_POST[email]',password='$_POST[password]' where id='$_SESSION[userId]'")) {
        $notice = "<div class='alert alert-success'>Successfully Saved</div>";
        header("location:accountSetting.php?notice=Successfully saved");
    } else {
        $notice = "<div class='alert alert-danger'>Error is:" . $con->error . "</div>";
    }
}
if (isset($_GET['notice'])) {
    $notice = "<div class='alert alert-success'>Successfully Saved</div>";
}
?>

<?php echo $notice ?>
<h2>Login Setting</h2>
<div class="todoList">
<div class="well well-sm todo">

    <!-- <hr> -->
    <form method="POST">
        <div class="form-group">
            <label for="some" class="col-form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $user['email'] ?>" id="some"
                required>
        </div>
        <div class="form-group">
            <label for="some" class="col-form-label">Password</label>
            <input type="password" name="password" value="<?php echo $user['password'] ?>" class="form-control"
                id="some" required>
        </div>
        <div class="center">
            <button class="btn btn-primary btn-sm btn-block" name="saveSetting">Save Setting</button>
        </div>
    </form>
</div>
</div>