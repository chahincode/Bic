<?php require "../../Utilities/Header.php" ?>
<?php
$id = $_GET["id"];
if (isset($_POST["submit"])) {
    $Statue_reception = $_POST['name_computer'];
    $sql = "UPDATE `alocatebd` SET `name_computer` = '$_POST[name_computer]', `name_user` = '$_POST[name_user]' WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
    } else {
        echo "Failed: " . mysqli_error($con);
    }
}
?>
<div class="container">
    <div class="text-center mb-4">
        <h3>Edit User Information</h3>
        <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `alocatebd` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">name of computer:</label>
                    <input type="text" class="form-control" name="name_computer"
                           value="<?php echo $row['name_computer'] ?>" required>
                </div>
                <br>
                <div class="col">
                    <label class="form-label">name of user:</label>
                    <input type="check" class="form-control" name="name_user" value="<?php echo $row['name_user'] ?>"
                           required>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit">update</button>
                <a href="Pages/ToDoList/ToDo_CyberWatch.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
