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
    <link rel="stylesheet" type="text/css" href="Pages/Magazin/style.css">
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="Pages/Categories/script.js"></script>
</head>
<body>
<div class="container">
    <div class="title-category">
        <span style="font-size: 16pt;color: #333333">Categories </span>
        <div>
            <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#addIn"
                style="margin-left: 2px;"><i class="fa fa-plus fa-fw"> </i>Add New Category
            </button>
        </div>
    </div>
    <div id="cardContainer" class="row row-category">
    </div>
</div>

<div id="addIn" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inventory BIC Bizerte</h4>
            </div>
            <div class="modal-body">
                <form id="AddCategoryForm" action="API/Categories/AddCategory.php" method="POST" enctype="multipart/form-data">
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
</body>
</html>

