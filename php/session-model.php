<?php 
if (isset($_POST['submit-session'])) {
    
    $session = mysqli_real_escape_string($con, $_POST['session']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    
    $data = "INSERT INTO `sessions`(`session`, `status`) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $data)) {
      $response = "<center><font class='error'>Problem Occur...</font></center>";
    }else{
      mysqli_stmt_bind_param($stmt, 'si', $session, $status);
      
      if (mysqli_stmt_execute($stmt)) {
         echo "<script> alert('Session added successfully!')
                window.location = 'http://localhost/my-echole/php/dashboard';
          </script>";
      }
  
    }
  }

?>
<form method="POST" action="#">
<div class="modal fade" id="modal-session">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create session</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (isset($response)) {echo $response;}?>
        
          <div class="card-body">
            <input class="form-control form-control-lg" type="text" placeholder="Session" name="session">
            <br>
            <select class="form-control form-control-lg" type="text" name="status">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
        <input type="submit" class="btn btn-primary" name="submit-session" value="Add">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div></form>