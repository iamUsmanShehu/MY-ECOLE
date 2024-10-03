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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <div class="row">
                  <div class="col-8">
                    <p>Registered Students</p><h3><?=$total_students?></h3>
                  </div>
                  <div class="col-4">
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                      <img width='100%' src="../dist/img/icons8-student-100.png">
                    </div>
                  </div>
                </div>
                
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <div class="row">
                  <div class="col-8">
                    <p>Declered Results</p><h3><?=$total_grades?></h3>
                  </div>
                  <div class="col-4">
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                      <img width='99%' src="../dist/img/icons8-classroom-100.png">
                    </div>
                  </div>
                </div>
                
              </div>
              </div>
          </div>
          <!-- ./col -->
           <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <div class="row">
                  <div class="col-8">
                    <p>Total Classes</p><h3><?=$total_classes?></h3>
                  </div>
                  <div class="col-4">
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                      <img width='100%' src="../dist/img/icons8-school-64.png">
                    </div>
                  </div>
                </div>
                
              </div>
              </div>
          </div>
          
          <!-- ./col -->
           <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <div class="row">
                  <div class="col-8">
                    <p>Total Subjects</p><h3><?=$total_subjects?></h3>
                  </div>
                  <div class="col-4">
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                      <img width='100%' src="../dist/img/icons8-book-and-pencil-100.png">
                    </div>
                  </div>
                </div>
                
              </div>
              </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-6 col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Declered Results</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Class</th>
                      <th style="width: 40px">Result_Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php
    $query_class = mysqli_prepare($con, "SELECT DISTINCT classes.name, sections.section,grades.status FROM `grades`JOIN classes ON classes.id = grades.class_id JOIN sections ON sections.id = classes.section WHERE grades.status = 1");
    mysqli_stmt_execute($query_class);
    $data = mysqli_stmt_get_result($query_class);
    $i = 0;
    while ($row = mysqli_fetch_assoc($data)) {
        $class = $row['name'];
        $section = $row['section'];
        $i++;

        echo '<td>'.$i.'</td>
              <td>'.$section.'-'.$class.'</td>
              <td><span class="badge bg-success">Ready</span></td>
            </tr>';
    }
    
?>
                   
                  </tbody>
                </table>
              </div>
            
          </div>
          <div class="col-6 col-12">
            
          </div>
        </div>

        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

      <?php include("single-promotion.php"); ?>
       <?php include("class-model.php"); ?>
       <?php include("subject-model.php"); ?>
       <?php include("session-model.php"); ?>
       <?php include("terms-model.php"); ?>
       <?php include("subject-combination.php"); ?>
       <?php include("approve-result.php"); ?>
      
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include("footer2.php"); ?>
</body>
</html>
<script type="text/javascript">
   $(function () {
    $("table").DataTable();});
</script>