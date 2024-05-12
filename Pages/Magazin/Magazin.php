<?php include "..\..\Utilities\Header.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Pages/Magazin/style.css">
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="Pages/Magazin/script.js"></script>
</head>
<body>
<div class="content container-table">
    
        <h2>Magazin</h2>
        <div class="bloc-btn">
    <a onclick="ShowAddMagazin()" class="btn btn-primary">
       Ajouter
    </a>
    </div>
    </div>
  
    <div class="table-responsive table-magazin">
        <table id="MagazinTable" class="table table-striped table-bordered">
            <thead class="table-light">
            <th></th>
            <th>Equipement</th>
            <th>modele</th>
            <th>SN</th>
            <th>Date de reception</th>
            <th>Statue</th>
            <th>Quantité</th>
            <!-- <th>commentaire</th> -->
            <th></th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="UpdateReceptionModal" tabindex="-1" role="dialog">
    <div class="formClass">
        <div>
            <label for="some" class="col-form-label"> Statut de reception</label>
            <input type="checkbox" id="Sta" name="Statue_reception" value="1">
        </div>
        <div class="center">
            <div>
                <button onclick="UpdateStatus()" class="btn btn-primary" name="submit">Update</button>
                <a onclick="HideUpdateStatus()" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </div>
</div>
<div style="width: 55%;margin: auto;padding: 22px;" class="modal fade well center" id="AddMagazinModal" tabindex="-2"
     role="dialog">
    <h4>Ajouter Au Magasin</h4>
    <hr>
    <form id="MagazinForm" method="POST" action="API/Magazin/AddMagazin.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="some" class="col-form-label">Equipement :</label>
            <input type="text" name="Equipement" class="form-control" id="Equipement" required>
        </div>
        <div class="form-group">
            <label for="some" class="col-form-label">Model :</label>
            <input type="text" name="Model" class="form-control" id="Model" required>
        </div>
        <div class="form-group">
            <label for="some" class="col-form-label">S\N :</label>
            <input type="text" name="SN" class="form-control" id="SN">
        </div>

        <div class="form-group">
            <label for="some" class="col-form-label">Date de reception :</label>
            <input type="date" name="date" class="form-control" id="date" required>
        </div>

        <div class="form-group">
            <label for="some" class="col-form-label">Quantité :</label>
            <input type="number" name="qt" class="form-control" id="qt" required>
        </div>

        <div class="form-group">
            <label for="some" class="col-form-label">Picture :</label>
            <input type="file" name="pic" class="form-control" id="pic" required>
        </div>

        <div class="form-group">
            <label for="some" class="col-form-label">Reception :</label>
            <input type="checkbox" id="State" name="State">
        </div>

        <div class="form-group">
            <label for="some" class="col-form-label">Commentaire :</label>
            <input type="text" name="Commentaire" class="form-control" id="Commentaire">
        </div>


        <div class="center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success">Reset</button>
            <button onclick="HideAddMagazin()" class="btn btn-danger">Cancel</button>
        </div>

    </form>
</div>
</div>
</body>
</html>
