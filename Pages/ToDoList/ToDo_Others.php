<?php require "../../Utilities/Header.php" ?>

<?php
  $catName = "All Inventeries";
  $stockArray = $con->query("select * from alocatebd" );
 ?>

  <div class="tableBox" >
    <table id="dataTable" class="table table-bordered table-striped" style="z-index: -1">
      <thead>
        <th>#</th>
        <th>name of computer</th>
        <th>name of user(s)</th>
        <th></th>
      </thead>
      <tbody>
      <?php $i=0;
        while ($row = $stockArray->fetch_assoc()) 
        { 
          $i=$i+1;
          $id = $row['id'];
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name_computer']; ?></td>
            <td><?php echo $row['name_user']; ?></td>
            <td>
              <a href="delatetodo.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"><button>delate</button></i></a>
              <a href="updatetodo.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"><button> update </button></i></a>
            </td>

           <?php 
            if (!empty($_SESSION['bill'])) 
            {
             
            foreach ($_SESSION['bill'] as $key => $value) 
            {
              if (in_array($row['id'], $_SESSION['bill'][$key])) 
              {
                echo "<td>Selected</td>";break;
              }            
               else
               {
              ?>
              <?php break;} } } else {?>
              <td id='selection<?php echo $i; ?>'></td>
              <?php } ?>
              <td colspan="center"><a href="delete.php?item=<?php echo $row['id'] ?>&url=<?php echo $_SERVER['QUERY_STRING'] ?>"></a></td>
          </tr>
      <?php
        }
       ?>
     </tbody>
    </table>
  </div>                      


<script type="text/javascript">
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
</script>

  <script src="js/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
  function toggleTasks(event) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  var subTasks = document.getElementById('sub_tasks');
  if (subTasks.style.display === 'none' || subTasks.style.display === '') {
    subTasks.style.display = 'block';
  } else {
    subTasks.style.display = 'none';
  }
}

</script>