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
            <h1 class="m-0">Manage Grades</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="add-result"class="btn btn-primary">Add Grades</a></li>
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
                <th>Student</th>
                <th>Class</th>
                <th>Subject</th>
                <th>CA</th>
                <th>Exam</th>
                <th>Total 100%</th>
                <th>Grade</th>
                <th>Remark</th>
                <th>Status</th>
                <?php if ($_SESSION['role'] == 3): ?> 
                <th>Actions</th>
              <?php endif ?>
              </tr>
              </thead>
              <tbody>
            <?php
  // `student_id`, `class_id`, `subject_id`,`ca`, `exam`, `status`, `result_status`;
            $quary = "SELECT terms.term, sessions.session, students.fname,students.lname,classes.name AS 'class',sections.section,subjects.name AS 'subject',grades.ca,grades.exam,grades.status,grades.id FROM `grades` JOIN students ON grades.student_id = students.id JOIN classes ON grades.class_id = classes.id JOIN subjects ON grades.subject_id = subjects.id JOIN sections ON classes.section = sections.id JOIN sessions ON sessions.id = grades.session_id JOIN terms ON terms.id = grades.term_id";
            // var_dump($quary);
              $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $student_fname = $row['fname'];
                  $student_lname = $row['lname'];
                  $class =$row['class'];
                  $section =$row['section'];
                  $session =$row['session'];
                  $term =$row['term'];
                  $subject =$row['subject'];
                  $ca =$row['ca'];
                  $exam =$row['exam'];
                  $status =$row['status'];
                  $total = $ca + $exam;
                  $grade = $ca + $exam;
                  

                  echo "<tr><td>$student_fname $student_lname</td><td>$section -  $class</td><td>$subject</td><td>$ca</td><td>$exam</td><td>$total</td><td>";
                  switch ($grade) {
                      case ($grade<=25):
                          echo "F";
                          break;
                      case ($grade<=35):
                          echo "E";
                          break;
                      case ($grade<=45):
                          echo "D";
                          break;
                      case ($grade<=55):
                          echo "C";
                          break;
                      case ($grade<=65):
                          echo "B";
                          break;
                      case ($grade<=100):
                          echo "A";
                          break;
                  } 
                  echo"</td><td>";
                     switch ($total) {
                            case ($total<=25):
                                echo "<span class='badge badge-dark'>FAIL</span>";
                                break;
                            case ($total<=35):
                                echo "<span class='badge badge-secondary'>POOR</span>";
                                break;
                            case ($total<=45):
                                echo "<span class='badge badge-warning'>PASS</span>";
                                break;
                            case ($total<=55):
                                echo "<span class='badge badge-info'>GOOD</span>";
                                break;
                            case ($total<=65):
                                echo "<span class='badge badge-primary'>VERYGOOD</span>";
                                break;
                            case ($total<=100):
                                echo "<span class='badge badge-success'>EXCELLENT</span>";
                                break;
                        }

                  echo"</td><td>$status</td>";if ($_SESSION['role'] == 1): echo "<td><a class='btn btn-info btn-sm' href='?id=$id'><i class='fa fa-edit'></i></a> &nbsp &nbsp <a class='btn btn-danger btn-sm mytoaster' href='delete-class?id='><i class='fa fa-trash'></i></a></td>";endif; echo"</tr>";
                }
                echo "<center>Session: <span class='badge badge-warning'>".$session."</span> Term: <span class='badge badge-warning'>".$term."</span></center>";
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