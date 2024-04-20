function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function openFormalocate() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function getValue(row) {

    var table = document.getElementById("dataTable");
    var selectedRow = table.rows[row.rowIndex];
    var selectedValueID = selectedRow.cells[0].innerText;

    alert(selectedValueID);
}

function getValue1(row) {

    var table = document.getElementById("dataTable");
    var selectedRow = table.rows[row.rowIndex];
    var selectedValueStat = selectedRow.cells[5].innerText;
    return selectedValueStat;
}
function openFormee() {
    document.getElementById("popupFormee").style.display = "block";
}

function closeFormee() {
    document.getElementById("popupFormee").style.display = "none";
};

function toggleTasks(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien
    var subTasks = document.getElementById('sub_tasks');
    if (subTasks.style.display === 'none' || subTasks.style.display === '') {
        subTasks.style.display = 'block';
    } else {
        subTasks.style.display = 'none';
    }
}
