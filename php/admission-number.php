<style type="text/css">
  .table td, .table th {
    padding: 0px;
    font-size: 14px;
  }
</style>
<?php 
include("../includes/config.php");
include("queries.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php include("print-header.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
   <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/myechole.png" alt="AdminLTELogo" height="60" width="60">
  </div>

<?php include('navbar.php'); ?>
<?php include('sidebar.php'); ?>

  
<div style="margin: 30px;">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class=" col-12">
            <form method="POST" action="insert-data.php">
              <div class="row">
                <div class="col-4"><select name="section-id" class="form-control" onchange="fetchSectionsClasses(this.value)">
                  <option>Select Section...</option>
                  <?php
                      $quary = "SELECT * FROM `sections` WHERE status = 1 ";
                        $result = $con -> query($quary);
                          while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $section = $row['section'];
                            echo "<option value='$id'>$section</option>";
                          }
                    ?>
                </select>
              </div>
              <div class="col-4">
                <select name="class-id" id="class" class="form-control" onchange="fetchStudents(this.value)">
                
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
        <div class="row">
          <div class=" col-12">
            <table id="mydatatable" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th>#</th>
                <th>Student</th>
                <th>Admission Number</th>
                <th>Gender</th>
              </tr>
              </thead>
              <tbody>
            
              </tbody>
            </table>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
  
       <?php include("class-model.php"); ?>
       <?php include("subject-model.php"); ?>
       <?php include("session-model.php"); ?>
       <?php include("terms-model.php"); ?>
       <?php include("subject-combination.php"); ?>
       <?php include("single-promotion.php"); ?>

      
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include("update-class.php"); ?>
<?php include("footer2.php"); ?>
</body>
</html>
<script>
  $(function () {
    $("#mydatatable").DataTable({
      dom: 'Bfrtip',
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('.row .col-md-6');
    
  });

  function fetchSectionsClasses(id){
    $('#class').html('');
    $.ajax({
      type:"POST",
      url:'fetch-classes.php',
      data: {class_id:id},
      success: function(data){
        $('#class').html(data);
      }
    });
  }
  function fetchStudents(id){
    $('tbody').html('');
    $.ajax({
      type:"POST",
      url:'fetch-per-class.php',
      data: {fetch_all_ids:id},
      success: function(data){
        $('tbody').html(data);
      }
    });
  }
</script>