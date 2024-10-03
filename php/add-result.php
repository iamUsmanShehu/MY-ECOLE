<?php 
include("../includes/config.php");
// include("queries.php");  
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
<style type="text/css">
  .table{
    background-color: white;
    box-shadow: 1px 1px 4px 3px rgb(27 85 161 / 26%);

  }
</style>
  
<div style="margin: 30px;">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Grades</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="manage-grades" class="btn btn-primary">Manage Grades</a>
              </li>
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
            <form method="POST" action="insert-data">
              <div class="row">
               
                <div class="col-6"><select name="session-id" class="form-control">
                  <option>Select Session...</option>
                 <?php
                      $quary = "SELECT * FROM `sessions` WHERE status = 1 ";
                        $result = $con -> query($quary);
                          while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $session = $row['session'];
                            echo "<option value='$id'>$session</option>";
                          }
                  ?>
                </select><br></div>

                 <div class="col-6"><select name="term-id" class="form-control">
                  <option value="first">Select Term...</option>
                  <?php
                      $quary = "SELECT * FROM `terms` WHERE status = 1 ";
                        $result = $con -> query($quary);
                          while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $term = $row['term'];
                            echo "<option value='$id'>$term</option>";
                          }
                    ?>
                </select></div>

                <div class="col-6">
                <select name="class-id" class="form-control" onchange="fetchStudents(this.value)" id="class">
                <option>Select Class...</option>
                <?php
                  $query_subjectcombinations_data = "SELECT DISTINCT sections.section AS 'ss', classes.id, classes.name,classes.section FROM `classes` JOIN sections ON classes.section = sections.id 
                  JOIN subjectcombinations ON classes.id = subjectcombinations.class_id ";

                  // $query_subjectcombinations_data = "SELECT DISTINCT sections.section AS 'ss', subjectcombinations.status,subjectcombinations.date_combined,subjectcombinations.id,classes.name,classes.section,subjects.name AS 'subject' FROM `subjectcombinations` 
                  // JOIN classes ON classes.id = subjectcombinations.class_id 
                  // JOIN subjects ON subjects.id = subjectcombinations.subject_id 
                  // JOIN sections ON classes.section = sections.id WHERE subjectcombinations.status = 1";
                  $query_subjectcombinations = mysqli_query($con, $query_subjectcombinations_data);
                  while($row = mysqli_fetch_assoc($query_subjectcombinations)) {
                    $id = $row['id'];
                    $section = $row['ss'];
                    $class = $row['name'];
                    
                    echo '<option value="'.$id.'">'.$section.' - '.$class.'</option>';
                  }
                 ?>
                
              </select>
                </div>
               <div class="col-6">
                  <select name="subject-id" class="form-control" id="subject-data">
                    <option>Subject ...</option>
                    <?php
                      $quary = "SELECT DISTINCT subjects.id,subjects.name FROM `subjects` 
                       JOIN subjectcombinations ON subjects.id = subjectcombinations.subject_id";
                        $result = $con -> query($quary);
                          while ($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $subject = $row['name'];
                            echo "<option value='$id'>$subject</option>";
                          }
                    ?>
                  </select>
                </div>
                <div class="col-12"><hr>
                  <table class="table table-borderless">
                    <tr>
                      <th colspan='2'>STUDENTS</th>
                      <th>Total (CA)</th>
                      <th>Exam</th>
                      <!-- <th>TOTAL MARKS</th> -->
                    </tr>
                    <tbody id="student-data">

                    </tbody>
                  </table>
                </div>
              </div><br>
              <input type="submit" name="submit-result" class="btn btn-primary" value="Save Grades">
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
      url:'fetch-students',
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