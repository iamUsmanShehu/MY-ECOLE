
<?php

require("includes/config.php");

$dateTime = new DateTime('now', new DateTimeZone('Africa/Lagos')); 
$lastlogin=$dateTime->format("d-M-y  h:i A"); 
$email= $_SESSION['email'];
// mysqli_query($con, "UPDATE _clients SET last_login='$lastlogin' WHERE email='$email'");
$expire = time()-26400;
setcookie('my-echole', $_SESSION['email'], $expire);
session_destroy();
header("location:login");



?>
