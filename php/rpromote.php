<?php 
include("../includes/config.php");
// include("queries.php");  

if(isset($_POST['auto_promote_prim'])) {
    
  // Automatically promote students in Primary
  $sql = "UPDATE students SET class_id = class_id + 1 WHERE class_id >=1 AND class_id < 7  AND section_id = 1";
  if ($con->query($sql) === TRUE) {
      echo "<script>alert('Students in Primary promoted successfully!')</script>";
  } else {
      echo "Error promoting students: " . $con->error;
  }
}


if(isset($_POST['auto_promote_jss'])) {
  // Automatically promote students in JSS
  $sql = "UPDATE students SET class_id = class_id + 1 WHERE class_id >=8 AND class_id < 11 AND section_id = 2";
  if ($con->query($sql) === TRUE) {
      echo "<script>alert('Students in JSS promoted successfully !');</script>";
  } else {
      echo "Error promoting students: " . $con->error;
  }
}

if(isset($_POST['auto_promote_sss'])) {
  // Automatically promote students in SSS
  $sql = "UPDATE students SET class_id = class_id + 1 WHERE class_id >=12 AND class_id < 15  AND section_id = 3";
  if ($con->query($sql) === TRUE) {
      echo "<script>alert('Students in SSS promoted successfully!')</script>";
  } else {
      echo "Error promoting students: " . $con->error;
  }
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
            <h1 class="m-0">Batch Promotion</h1>
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

            <!-- promote primary -->
            <form method="post" action="">
                <button type="submit" name="auto_promote_prim" class="btn btn-secondary">Automatically Promote Students in Primary</button>
            </form>
            <br>
            <!-- promote JSS -->
            <form method="post" action="">
                <button class="btn btn-secondary" type="submit" name="auto_promote_jss">Automatically Promote Students in JSS </button>
            </form>

            <br>
            <!-- promote SSS -->
            <form method="post" action="">
                <button class="btn btn-secondary" type="submit" name="auto_promote_sss">Automatically Promote Students SSS</button>
            </form>

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
  // $(function () {
  //   $("#mydatatable").DataTable();
  // });
  function fetchStudents(id){
    $('#student-data').html('');
    $.ajax({
      type:"POST",
      url:'fetch-students.php',
      data: {students_id:id},
      success: function(data){
        $('#student-data').html(data);
      }
    })
  }
</script>


 <?php
    // $query_subjectcombinations_data = "SELECT subjectcombinations.status,subjectcombinations.date_combined,subjectcombinations.id,classes.name,classes.section,subjects.name AS 'subject' FROM `subjectcombinations` JOIN classes ON classes.id = subjectcombinations.class_id JOIN subjects ON subjects.id = subjectcombinations.subject_id WHERE subjectcombinations.status = 1";
    // $query_subjectcombinations = mysqli_query($con, $query_subjectcombinations_data);
    // while($row = mysqli_fetch_assoc($query_subjectcombinations)) {
    //   $id = $row['id'];
    //   $section = $row['section'];
    //   $class = $row['name'];
      
    //   echo '<option value="'.$id.'">'.$section.' - '.$class.'</option>';
    // }
   ?>