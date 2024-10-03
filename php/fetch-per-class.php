<?php 
include_once("../includes/config.php");
$fetch_all_ids = htmlspecialchars($_POST['fetch_all_ids']);
// var_dump($fetch_all_ids);
if (isset($_POST['fetch_all_ids'])) {
      $quary = "SELECT students.id, students.fname, students.lname, students.gender, students.section_id, students.serial_no FROM `students` JOIN sections ON students.section_id = sections.id WHERE students.section_id ='$fetch_all_ids'";
      $result = $con -> query($quary);
      $i = 0;
        while ($row = $result->fetch_assoc()) {
          $i++;
          $id = $row['id'];
          $fname = $row['fname'];
          $lname = $row['lname'];
          $gender = $row['gender'];
          $section_id = $row['section_id'];
          // $class_id = $row['class_id'];
          $serial_no = $row['serial_no'];
         
          echo "<tr><td>$i</td><td>$fname &nbsp $lname</td><td>$serial_no</td><td>$gender</td></tr>";
        }

                 
}

?>