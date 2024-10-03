<?php 
include("../includes/config.php");
include("queries.php");


if (isset($_REQUEST['did'])) {
    $did = intval($_REQUEST['did']);
    $status=0;
    $sql="UPDATE subjectcombinations SET status = '$status' WHERE id = '$did' ";
    mysqli_query($con, $sql);
}
if (isset($_REQUEST['aid'])) {
    $aid = intval($_REQUEST['aid']);
    $status=1;
    $sql="UPDATE subjectcombinations SET status = '$status' WHERE id = '$aid' ";
    mysqli_query($con, $sql);
}
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
            <h1 class="m-0">Manage Subject Combination</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"data-toggle="modal" data-target="#modal-subject-combination" class="btn btn-primary">Asign Subject</a></li>
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
                <th>Subject</th>
                <th>Status</th>
                <th>Date Combined</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
            <?php
            $quary = "SELECT sections.section AS 'class-section',subjectcombinations.status,subjectcombinations.date_combined,subjectcombinations.id,classes.name,classes.section,subjects.name AS 'subject' FROM `subjectcombinations` JOIN classes ON classes.id = subjectcombinations.class_id JOIN subjects ON subjects.id = subjectcombinations.subject_id JOIN sections ON classes.section = sections.id";
              $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $class = $row['name'];
                  $section = $row['class-section'];
                  $subject = $row['subject'];
                  $status = $row['status'];
                  $date_combined = $row['date_combined'];
                  if ($status == 0) {$status = "Deactived";}else{$status = "Active";}

                  echo "<tr><td>$section - $class</td><td>$subject</td><td>$status </td><td>$date_combined</td><td>"; 
                  if ($status == "Deactived") {
                  echo "<a class='btn btn-success btn-sm' href=manage-subject-combination?aid=$id><i class='fa fa-check'></i></a>";?>
                  <?php }elseif ($status == "Active"){ 
                  echo "<a class='btn btn-danger btn-sm mytoaster' href=manage-subject-combination?did=$id><i class='fa fa-times'></i></a>";}else{echo "null";}?>
                    </td></tr>
                <?php } ?>
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