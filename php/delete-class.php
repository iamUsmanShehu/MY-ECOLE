
<?php 
include '../includes/config.php';
$get_id = htmlspecialchars($_GET['id']);
$delete = "DELETE FROM classes WHERE id = $get_id";
mysqli_query($con, $delete);
echo "deleted successful!";
header('refresh:2; url="manage-class"');
?>