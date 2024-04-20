function loadPage(page) {
    $.ajax({
        url: page,
        type: 'GET',
        success: function (response) {
            $('#pageContent').html(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

// Attach click event handlers to sidebar links
$(document).ready(function () {
    $('.sidebar-link').click(function (e) {
        e.preventDefault();
        var page = $(this).attr('href');
        loadPage(page);
    });
});



function toggleTasks(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien
    var subTasks = document.getElementById('sub_tasks');
    if (subTasks.style.display === 'none' || subTasks.style.display === '') {
        subTasks.style.display = 'block';
    } else {
        subTasks.style.display = 'none';
    }
}