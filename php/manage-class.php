<?php 
include("../includes/config.php");
include("queries.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("header.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
   <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/myechole.png" alt="AdminLTELogo" height="60" width="60">
  </div>

<?php //include('navbar.php'); ?>
<?php include('sidebar.php'); ?>

  
<div style="margin: 30px;">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Classes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"data-toggle="modal" data-target="#modal-class" class="btn btn-primary">Add Class</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class=" col-12">
            <table id="mydatatable" class="table table-striped table-bordered">
              <thead>
              <tr>
                <th>Section  & Class</th>
                <th>Class in Numeric</th>
                <th>Date Created</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
            <?php
            $quary = "SELECT * FROM `classes`JOIN sections ON classes.section = sections.id ";
              $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $class = $row['name'];
                  $section = $row['section'];
                  $class_numeric =$row['class_numeric'];
                  $date_created =$row['date_created'];

                  echo "<tr><td>$section - $class</td><td>$class_numeric</td><td>$date_created</td><td><a class='btn btn-info btn-sm' href=?id=$id data-toggle='modal' data-target='#modal-update-class'><i class='fa fa-edit'></i></a> &nbsp &nbsp <a class='btn btn-danger btn-sm mytoaster' href='delete-class?id=$id'><i class='fa fa-trash'></i></a></td></tr>";
                }

            ?>
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
    $("#mydatatable").DataTable();
    // $('#mydatatable').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>