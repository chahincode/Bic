function addInBill(id,place)
{
    var value = $("#counter").val();
    value ++;
    var selection = 'selection'+place;
    $("#bill").fadeIn();
    $("#counter").val(value);
    $("#"+selection).html("selected");
    $.post('called.php?q=addtobill',
        {
            id:id
        }
    );

}
$(document).ready(function()
{
    $(".rightAccount").click(function(){$(".account").fadeToggle();});
    $("#dataTable").DataTable();

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