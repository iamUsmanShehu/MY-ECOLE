<?php 
// include('config.php');

if (isset($_POST['add'])) {
    
    $section = mysqli_real_escape_string($con, $_POST['section']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $class_numeric = mysqli_real_escape_string($con, $_POST['class_numeric']);
    
    $data = "INSERT INTO `classes`(`section`, `name`, `class_numeric`) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $data)) {
      $response = "<center><font class='error'>Problem Occur...</font></center>";
    }else{
      mysqli_stmt_bind_param($stmt, 'isi', $section, $class, $class_numeric);

       if (mysqli_stmt_execute($stmt)) {
          echo "<script> 
                  alert('Class added successfully!')
                  window.location = 'http://localhost/my-echole/php/dashboard';
                </script>";
      }
    }
  }

?>
<form method="POST">
<div class="modal fade" id="modal-class">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Class</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (isset($response)) {echo $response;}?>
        
          <div class="card-body">
            <select class="form-control form-control-lg" type="text" name="section">
              <?php
                $quary = "SELECT * FROM `sections` ";
                  $result = $con -> query($quary);
                    while ($row = $result->fetch_assoc()) {
                      $id = $row['id'];
                      $section = $row['section'];
                      
                      echo "<option value='$id'>$section</option>";
                    }
                ?>
            </select><br>
            <div class="row">
              <div class="col-md-8">
                <input class="form-control form-control-lg" type="text" placeholder="Class (e.g One, Two ...)" name="class">
              </div>
              <div class="col-md-4">
                <select class="form-control form-control-lg" type="text" name="class_numeric">
                  <option value="">Numeric...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
            </div>
          </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
        <button type="submit" class="btn btn-primary" name="add">Add</button>
      </div>
    </div>
  </div>
</form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>