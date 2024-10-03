<?php 
// include('config.php');
if (isset($_POST['asign-btn'])) {
    
    $class_id = mysqli_real_escape_string($con, $_POST['class_id']);
    $subject_id = mysqli_real_escape_string($con, $_POST['subject_id']);
    $status = 1;
    $class = mysqli_query($con, "SELECT class_id FROM subjectcombinations WHERE class_id='$class_id'");
    $count_class = mysqli_num_rows($class);
    $subject = mysqli_query($con, "SELECT subject_id FROM subjectcombinations WHERE subject_id='$subject_id'");
    $subject_rows = mysqli_num_rows($subject);

    if ($subject_rows != 0 && $count_class != 0) {

        echo "<script> alert('Subject Already Asigned to the Class');</script>";
    } else {


    $data = "INSERT INTO `subjectcombinations`(`class_id`, `subject_id`, `status`) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $data)) {
      $response = "<center><font class='error'>Problem Occur...</font></center>";
    }else{
      mysqli_stmt_bind_param($stmt, 'iii', $class_id, $subject_id, $status);
       if (mysqli_stmt_execute($stmt)) {
          echo "<script> 
                  alert('Combined Successfully!')
                  window.location = 'http://localhost/my-echole/php/dashboard';
    
                </script>";
        }
      }
    }
}
?>
<form method="POST">
<div class="modal fade" id="modal-subject-combination">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Asign Subject to Class</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (isset($response)) {echo $response;}?>
        <select class="form-control form-control-lg" type="text" name="class_id">
          <?php
            $quary = "SELECT * FROM `classes` JOIN sections ON classes.section = sections.id ORDER BY classes.section";
              $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $class = $row['name'];
                  $section = $row['section'];
                  $date_created =$row['date_created'];
                  
                  echo "<option value='$id'>$section - $class</option>";
                }
          ?>
        </select>
        <br>
        <select class="form-control form-control-lg" type="text" name="subject_id">
            <?php
            $quary = "SELECT * FROM `subjects` ";
              $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $subject = $row['name'];
                  

                  echo "<option value='$id'>$subject</option>";
                }
            ?>
        </select>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
        <input type="submit" class="btn btn-primary" name="asign-btn" value="Asign">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div></form>