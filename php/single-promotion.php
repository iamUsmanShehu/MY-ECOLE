<?php 
// include("../includes/config.php");

if (isset($_POST['submit-promotion'])) {
    
    
        // Promote a single student to a specific class
        $student_id = $_POST['id'];
        $new_class = $_POST['class'];
        $new_section = $_POST['section'];
    
        $sql = "UPDATE students SET class_id = $new_class, section_id = $new_section WHERE serial_no = $student_id";
        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Student promoted successfully!')</script>";
        } else {
            echo "Error promoting student: " . $con->error;
        }
    }
  
    
  

?>
<form method="POST" action="#">
<div class="modal fade" id="modal-promo">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Single promotion</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if (isset($response)) {echo $response;}?>
        
          <div class="card-body">
            <input class="form-control form-control-lg" type="text" placeholder="Student Serial Number" name="id">
           
                <br>
        <?php
            // Step 2: Retrieve data for the dropdown
                $sql = "SELECT id, section FROM sections";
                $result = $con->query($sql);

                if($result==false){

                    die("Error: ". $con->error);
                }

                if ($result->num_rows > 0) {
                    // Step 3: Create the dropdown
                    echo '<select name="section" class="form-control form-control-lg">';
                    echo'<option>Section</option>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['section'] . '</option>';
                    }
                    echo '</select>';
                } else {
                    echo 'No data available.';
                }
                echo '<br>';
                // Step 2: Retrieve data for the dropdown
                $sql = "SELECT classes.name name,classes.id mid,classes.section,sections.section sec,sections.id FROM classes  join sections on classes.section = sections.id where class_numeric>0";
                $result = $con->query($sql);

                if($result==false){

                    die("Error: ". $con->error);
                }

                if ($result->num_rows > 0) {
                    // Step 3: Create the dropdown
                    echo '<select name="class" class="form-control form-control-lg">';
                    echo'<option>Class</option>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['mid'] . '">' . $row['sec']."-". $row['name'] .'</option>';
                    }
                    echo '</select>';
                } else {
                    echo ' No data available.';
                }
            ?>

          </div>
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
        <input type="submit" class="btn btn-primary" name="submit-promotion" value="Promote">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div></form>