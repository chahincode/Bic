<?php include "..\..\Utilities\Header.php" ?>
<?php
$notice = "";
if (isset($_POST['safeIn'])) {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/" . $_FILES["inPic"]["name"]);
    if ($con->query("insert into categories (name,pic) value ('$_POST[inName]','$filename')")) {
        $notice = "<div class='alert alert-success'>Successfully Saved</div>";
    } else
        $notice = "<div class='alert alert-danger'>Not saved Error:" . $con->error . "</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo siteTitle(); ?></title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/customStyle.css">
    <script src='../../js/jquery.js'></script>
    <script src='../../js/bootstrap.min.js'></script>
    <script src="../../js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</head>
<body style="background: #ECF0F5;padding:0;margin:0">
<?php include('../../Components/SideBar.php'); ?>
<?php include('../../Components/TopBar/TopBar.php'); ?>
<div class=" marginLeft content2" id="pageContent">
    <?php echo $notice; ?>
    <div>
        <span style="font-size: 16pt;color: #333333">Categories </span>
        <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn"><i
                    class="fa fa-plus fa-fw"> </i>Add New Category
        </button>
    </div>

    <?php
    $i = 0;
    $array = $con->query("select * from categories");
    ?>
    <br>
    <table class="table table-hover table-striped " style="width: 55%;margin: auto;">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Quanitity</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = $array->fetch_assoc()) {
            $i++;
            $array2 = $con->query("select count(*) as qty from inventeries where catId = '$row[id]'");
            $row2 = $array2->fetch_assoc();
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row2['qty']; ?></td>
                <td><a href="../../Utilities/delete.php?category=<?php echo $row['id'] ?>">
                        <button class="btn btn-xs btn-danger">Delete</button>
                    </a></td>
            </tr>

            <?php
        }
        echo "</table>";
        ?>
</div>
</body>
</html>
<script src="../Home/script.js"></script>


<div id="addIn" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Inventory</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div style="width: 77%;margin: auto;">

                        <div class="form-group">
                            <label for="some" class="col-form-label">Name</label>
                            <input type="text" name="inName" class="form-control" id="some" required>
                        </div>
                        <div class="form-group">
                            <label for="2" class="col-form-label">Picture</label>
                            <input type="file" name="inPic" class="form-control" id="2" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="safeIn">Save Inventory</button>
            </div>
            </form>
        </div>

    </div>
</div>

