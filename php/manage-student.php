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
            <h1 class="m-0">Manage Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="student-form" class="btn btn-primary">Register Student</a></li>
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
            <table id="mydatatable" class="table table-striped table-bordered" cellpadding="1" cellspacing="1" width="100%">
              <thead>
              <tr>
                <th>#</th>
                <th>Student</th>
                <th>Gender</th>
                <th>Disability</th>
                <th>State</th>
                <th>L.G.A</th>
                <th>Address</th>
                <th>Class</th>
                <th>Reg NO</th>
                <th>Joined On</th>
                <th>Actions</th>
              </tr>
              </thead>
              <tbody>
            <?php
            // JOIN classes ON class.id = students.class_id JOIN sections ON sections.id = students.section_id
            $quary = "SELECT * FROM `students`";
              $result = $con -> query($quary);
              $i = 0;
              
                while ($row = $result->fetch_assoc()) {
                  $i++;
                  $id = $row['id'];
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $gender = $row['gender'];
                  $disability = $row['disability'];
                  $state_of_origin = $row['state_of_origin'];
                  $lga_of_origin = $row['lga_of_origin'];
                  $home_address = $row['home_address'];
                  $state_of_residence = $row['state_of_residence'];
                  $lga_of_residence = $row['lga_of_residence'];
                  $address_of_residence = $row['address_of_residence'];
                  $section_id = $row['section_id'];
                  $class_id = $row['class_id'];
                  $serial_no = $row['serial_no'];
                  $passport = $row['passport'];
                  $gurdian_name = $row['gurdian_name'];
                  $gurdian_state = $row['gurdian_state'];
                  $gurdian_lga = $row['gurdian_lga'];
                  $gurdian_address = $row['gurdian_address'];
                  $gurdian_ocupation = $row['gurdian_ocupation'];
                  $gurdian_phone = $row['gurdian_phone'];
                  $joined_date = $row['joined_date'];

                 if($class_id>0){
                  $csql = "SELECT name FROM classes WHERE id = $class_id ";
                  $result2 = $con->query($csql);

                  // $row2 = $result2->fetch_assoc();
                  while ($row2= $result2->fetch_assoc()){
                  
                    $class_id = $row2['name'];
                  

                 }
                }
                 if($class_id>0){
                  $ssql = "SELECT section FROM sections WHERE id = $section_id ";
                  $result3 = $con->query($ssql);

                // $row3 = $result3->fetch_assoc();
                while ($row3 = $result3->fetch_assoc()){
                if($row3){
                  $section_id = $row3['section'];
                }}

                 }
                  // if ($section_id == 1) {
                  //   $section_id = "Primary";
                  // }elseif ($section_id == 2) {
                  //   $section_id = "JSS";
                  // }elseif ($section_id == 3) {
                  //   $section_id = "SSS";
                  // }else{$section_id ="Null";}

                  // if ($class_id == 1) {
                  //   $class_id = "One (1)";
                  // }elseif ($class_id == 2) {
                  //   $class_id = "Two (2)";
                  // }elseif ($class_id == 3) {
                  //   $class_id = "Three (3)";
                  // }else{$class_id ="Null";}

                  
                  echo "<tr><td>$i</td><td>$fname &nbsp $lname</td><td>$gender</td><td>$disability</td><td>$state_of_residence</td><td>$lga_of_residence</td><td>$address_of_residence</td><td>$section_id - $class_id</td><td>$serial_no</td><td>$joined_date</td><td><a class='btn btn-info btn-sm' href='edit-student?id=$id'><i class='fa fa-edit'></i></a> &nbsp &nbsp <a class='btn btn-danger btn-sm' href='block-student?id=$id'><i class='fa fa-trash'></i></a></td></tr>";
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
    $("#mydatatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    });
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