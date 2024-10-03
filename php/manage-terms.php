<?php 
include("../includes/config.php");
include("queries.php");


if (isset($_REQUEST['did'])) {
    $did = intval($_REQUEST['did']);
    $status=0;
    $sql="UPDATE terms SET status = '$status' WHERE id = '$did' ";
    mysqli_query($con, $sql);
}
if (isset($_REQUEST['aid'])) {
    $aid = intval($_REQUEST['aid']);
    $status=1;
    $sql="UPDATE terms SET status = '$status' WHERE id = '$aid' ";
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

<?php include('navbar.php'); ?>
<?php include('sidebar.php'); ?>

  
<div style="margin: 30px;">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Terms</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"data-toggle="modal" data-target="#modal-terms" class="btn btn-primary">New Term</a></li>
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
                <th>#</th>
                <th>terms</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
            <?php
            $quary = "SELECT * FROM terms";
              $result = $con -> query($quary);
              $i = 0;
                while ($row = $result->fetch_assoc()) {
                  $i++;
                  $id = $row['id'];
                  $term = $row['term'];
                  $status = $row['status'];
                  if ($status == 0) {$status = "Deactived";}else{$status = "Active";}

                  echo "<tr><td>$i</td><td>$term</td><td>$status </td><td>"; 
                  if ($status == "Deactived") {
                  echo "<a class='btn btn-success btn-sm' href=manage-terms?aid=$id><i class='fa fa-check'></i></a>";?>
                  <?php }elseif ($status == "Active"){ 
                  echo "<a class='btn btn-danger btn-sm mytoaster' href=manage-terms?did=$id><i class='fa fa-times'></i></a>";}else{echo "null";}?>
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
    $("#mydatatable").DataTable();});
</script>