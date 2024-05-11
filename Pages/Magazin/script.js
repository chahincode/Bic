LoadData();
var selectedMagazinID;

document.getElementById("MagazinForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", this.action, true);
    xhr.onload = function () {
        // Handle response from PHP script
        console.log(xhr.responseText);
    };
    xhr.send(formData);
    ClearAddMagazinForm();

});


function getStatusBadgeClass(status) {
    switch (status) {
        case '1':
            return 'badge-success';
        case '0':
            return 'badge-warning';
        default:
            return '';
    }
}

function getStatusString(status) {
    switch (status) {
        case '1':
            return 'Recu';
        case '0':
            return 'Pending';
        default :
            return 'Pending';
    }
}

function UpdateReception(status, id) {
    if (status != 1) {
        $('#UpdateReceptionModal').modal('show');
        selectedMagazinID = id;
    }
}

function HideUpdateStatus() {
    $('#UpdateReceptionModal').modal('hide');
}

function UpdateStatus() {
    var checkbox = document.getElementById("Sta");
    var NewStatus = checkbox.checked ? 1 : 0;
    fetch('API/Magazin/UpdateReceptionStatus.php?id=' + selectedMagazinID)
        .then(response => response.json())
        .then(data => {
        });
    $('#UpdateReceptionModal').modal('hide');
    LoadData();
    console.log("selected id is " + selectedMagazinID + " and the status is " + NewStatus);
}

function LoadData() {
    fetch('API/Magazin/GetMagazin.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('#MagazinTable tbody');
            tableBody.innerHTML = ''; // Clear placeholder rows
            let counter = 1;
            data.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                        <td>${counter++}</td>
                        <td>${row.Equipement}</td>
                        <td>${row.modele}</td>
                        <td>${row.SN}</td>
                        <td>${row.Date_reception}</td>
                        <td><span class="badge ${getStatusBadgeClass(row.Statue_reception)}">${getStatusString(row.Statue_reception)}</span></td>
                        <td>${row.Qt}</td>
                        <td>${row.commentaire}</td>
                        <td><button onclick="UpdateReception(${row.Statue_reception},${row.id})" lass="actionButton">Reception</button></td>
                    `;
                tableBody.appendChild(tr);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}

function ShowAddMagazin() {
    $('#AddMagazinModal').modal('show');
}

function HideAddMagazin() {
    ClearAddMagazinForm();
    $('#AddMagazinModal').modal('hide');
    LoadData();
}

function ClearAddMagazinForm() {
    document.getElementById("MagazinForm").reset();
}