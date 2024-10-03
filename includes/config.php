<?php 
	$user = "root";
	$key = "";
	$server = "localhost";
	$db ="myecholedb";
    $con =mysqli_connect($server,$user, $key, $db) or die(error_log("problem with connection..."));

session_start();
session_regenerate_id(true);
// querying the System info
	$query_system_data = "SELECT * FROM `system`";
	$query = mysqli_query($con, $query_system_data);
    while($row = mysqli_fetch_assoc($query)) {
    	$name = $row['name'];
    	$theme = $row['theme'];
    	$font = $row['font'];
    	$color = $row['color'];
    	$logo = $row['logo'];
    	$description = $row['description'];
	}

?>