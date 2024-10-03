<option>Select Class...</option>
<?php 
include_once("../includes/config.php");
$class_id = htmlspecialchars($_POST['class_id']);
// var_dump($class_id);
if (isset($_POST['class_id'])) {
      $quary = "SELECT sections.section, classes.name, classes.id FROM `classes` JOIN sections ON classes.section = sections.id WHERE classes.section ='$class_id' AND classes.name != 'Graduate'";
      $result = $con -> query($quary);
      while ($row = $result->fetch_assoc()) {
      	$id = $row['id'];
		$section = $row['section'];
		$class = $row['name'];
        echo "
	        
	        <option value='$id'>$section - $class</option>";
      }
                 
}

?>