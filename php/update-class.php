<?php 
// include('config.php');
if (isset($_POST['update'])) {

    $section = mysqli_real_escape_string($con, $_POST['section']);
    $class = mysqli_real_escape_string($con, $_POST['class']);
    $classid = mysqli_real_escape_string($con, $_POST['classid']);
  $update ="UPDATE `classes` SET `name`='$class',`section`='$section' WHERE id = $classid";
  mysqli_query($con, $update);
}


if (isset($_REQUEST['id'])) {
    
$get_id = mysqli_real_escape_string($con, $_REQUEST['id']);
    $quary = "SELECT * FROM `classes` WHERE id = ".$get_id." ";
    $result = $con -> query($quary);
    while ($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $class = $row['name'];
      $section = $row['section'];
      $date_created = $row['date_created'];
    }        
  }

?>
<form method="POST">
<div class="modal fade" id="modal-update-class">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Class</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php if (isset($response)) {echo $response;}?>
              
                <div class="card-body">
                  <select class="form-control form-control-lg" type="text" name="section">
                    <option value="<?=$section;?>"><?php if (isset($section)) {echo $section;}?></option>
                    <option value="1">Primary</option>
                    <option value="2">Juniour</option>
                    <option value="3">Secondary</option>
                  </select><br>
                  <input class="form-control form-control-lg" type="text" value="<?=$class;?>" placeholder="<?=$class?>" name="class">
                  <input type="hidden" value="<?=$id;?>" name="classid">
                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
              <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
          </div></form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>