<?php 
include_once("../includes/config.php");
include("queries.php");
$students_id = htmlspecialchars($_POST['students_id']);
// var_dump($students_id);
if (isset($_POST['students_id'])) {
	$quary = "SELECT * FROM `students` WHERE class_id ='$students_id'";
	$result = $con -> query($quary);
	if ($result->num_rows > 0) {
		$i = 0;
		while ($row = $result->fetch_assoc()) {
			$fname = $row['fname'];
			$lname = $row['lname'];
			$i++;
			
		   echo "<tr><td colspan='2' style='text-transform: uppercase;'>$fname $lname</td>";
		   echo '<input type="hidden" class="form-control clid"  value="'.$row["id"].'" name="student-id'.$i.'">';
		   echo '<td><input type="number" class="form-control clid" id="ca2" name="ca'.$i.'" placeholder="Enter Score"></td>';
		   echo '<td><input type="number" class="form-control clid" id="Exam" name="exam'.$i.'" placeholder="Enter Score"></td></tr>';
		   // echo '<td><input type="number" class="form-control clid" id="marks" name="marks'.$i.'" ></td>
		   
		   
		}echo '<td><input type="hidden" class="form-control clid" value="'.$i.'" name="hidden_value" ></td></tr>';	
	}else{echo "<center> No Students available!</center>";}
}

?>