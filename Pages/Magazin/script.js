
// JavaScript code
function showPopup() {
    var popup = document.getElementById("popupFormee");
    var overlay = document.getElementById("overlay");
    popup.classList.add("active");

}

// You can also define a function to close the popup
function closePopup() {
    var popup = document.getElementById("popupFormee");
    var overlay = document.getElementById("overlay");
    popup.classList.remove("active");

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

function toggleTasks(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien
    var subTasks = document.getElementById('sub_tasks');
    if (subTasks.style.display === 'none' || subTasks.style.display === '') {
        subTasks.style.display = 'block';
    } else {
        subTasks.style.display = 'none';
    }
}
