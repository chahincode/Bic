LoadData();

function LoadData() {
    fetch('API/Categories/GetCategories.php')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('cardContainer').innerHTML = data.map(category => generateCard(category)).join('');
        })
        .catch(error => console.error('Error fetching data:', error));
}

function generateCard(category) {
    return `
        <div class="box2">
            <div class="bloc-image"><img style="width:100%" src="photo/${category.pic}" class='img-thumbnail'></div>
            <div class="bloc-content">
                <div class="card-name">${category.name}</div>
                <div class="quantity">${category.invCount}</div>
            </div>
        </div>
    `;
}

function SaveCategory() {
    $('#addIn').modal('hide');
}

document.getElementById("AddCategoryForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission
    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", this.action, true);
    xhr.onload = function () {
        // Handle response from PHP script
        console.log(xhr.responseText);
    };
    xhr.send(formData);
console.log("hiii");
});