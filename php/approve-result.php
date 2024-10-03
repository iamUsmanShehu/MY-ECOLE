<?php
if (isset($_POST['approve'])) {
  $class_id = mysqli_real_escape_string($con, $_POST['class_id']);
  $session_id = mysqli_real_escape_string($con, $_POST['session_id']);
  $term_id = mysqli_real_escape_string($con, $_POST['term_id']);

  // Update the status column
  $sql = "UPDATE grades 
        SET status = 1 - status
        WHERE class_id = $class_id AND session_id = $session_id AND term_id = $term_id";


  $stmt = mysqli_prepare($con, $sql);

  if ($stmt) {
      if (mysqli_stmt_execute($stmt)) {
          echo "<script> 
                  alert('Status updated successfully!')
                  window.location = 'http://localhost/my-echole/php/dashboard';
                </script>";
          
      } else {
         echo "<script> alert('Error updating status: ')</script>". mysqli_error($con);
      }

      mysqli_stmt_close($stmt);
  } else {
    echo "<script> alert('Error in preparing the statement: ')</script>" . mysqli_error($con);
  }

  // mysqli_close($con);
}
?>


<form method="POST">
<div class="modal fade" id="modal-approve">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Approve Result</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select name="session_id" class="form-control">
          <option>Select Session...</option>
           <?php 
                $quary_sessions = "SELECT session, id FROM sessions";
                $rslt = $con -> query($quary_sessions);
                while ($row = $rslt->fetch_assoc()) {
                  $id = $row['id'];
                  $session = $row['session'];
                  echo "
                    
                    <option value='$id'>$session</option>";
                }
          ?>
        </select>
        <br>
        <select name="term_id" class="form-control">
          <option>Select Term...</option>
           <?php 
                $quary = "SELECT term, id FROM terms";
                $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $term = $row['term'];
                  echo "
                    
                    <option value='$id'>$term</option>";
                }
          ?>
        </select>
        <br>
        <select name="section_id" id="section" onchange="fetchSession(this.value)" class="form-control">
          <option>Select Section...</option>
          <?php 
                $quary = "SELECT section, id FROM sections";
                $result = $con -> query($quary);
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $section = $row['section'];
                  echo "
                    
                    <option value='$id'>$section</option>";
                }
          ?>
        </select>
        <br>

        <select id="class-data" name="class_id" class="form-control">
          
        </select>
        <br>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
        <input type="submit" class="btn btn-primary" name="approve" value="Approve">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div></form>

<script>
  // $(function () {
  //   $("#mydatatable").DataTable();
  // });
  function fetchSession(id){
    $('#class-data').html('');
    $.ajax({
      type:"POST",
      url:'fetch-classes',
      data: {class_id:id},
      success: function(data){
        $('#class-data').html(data);
      }
    })
  }
</script>