<?php
include('../includes/config.php');

if (isset($_POST["save"])) {
	function inseart_data($data){
	foreach ($data as $key => $value) {
		$k[] = $key;
		$v[] = "'".$value."'";
		//var_dump($v);
	}
	$k=implode(",", $k);
	$v=implode(",", $v);

$connect = mysqli_connect("localhost", "root", "", "my-echole");
	$insert = "INSERT INTO pins($k) VALUES($v)";
	mysqli_query($connect,$insert);

}



$n = $_POST['tv'];

for ($i=0; $i < $n; $i++) {
	$x=$i+1;
	$data = array(
		'pin' => htmlspecialchars($_POST['pin'.$i])
	 );
	 	
inseart_data($data);

	$feedback = "<font class='alert alert-success'>$x Pins Save Successfully!</font>";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Generator</title>
	<?php //include("../php/header.php"); ?>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<style type="text/css"> 
	.container{
		display: grid;
		place-items:center;
	}
	form{border:1px solid #eee;background-color: white;padding: 20px;}
	.form-control{width:100%;border:none;}
	.btn-success {margin-top: 5px;}

</style>
<body style="background: #f2f2f2;">
	<div class="container">
		<h1>Pin Vending Machine</h1>

		<form method="GET" class="form form-inline" style="width:50%;">
			<div class="row">
				<div class="col-md-5">
					<input type="number" name="number" class="form-control" placeholder="PINS Vending">
					<input type="submit" value="Generate" class="btn btn-primary" name="submit">
				</div>
		</form>
				<div class="col-md-7">
					<form method="POST" style="background-color: #eee;border-top: none;box-shadow: inset 0px;">
					<?php 
					if (isset($_GET['number'])) {
					
					
					if (isset($feedback)) echo $feedback;
						$number = $_GET['number'];
						if (isset($_POST)) {
							$i = 0;
							for ($i = 0; $i < $number; $i++) { 
								$random =  random_int(10000, 99999) . '-' . random_int(10000, 99999) . '-' . random_int(10000, 99999) . '-' . random_int(10000, 99999);
								echo '<input type="text"  name="pin'.$i.'" class="form-control" value="'.$random.'" readonly>';
							}
					echo ' <input type="hidden" value="'.$i.'" name="tv">
					<input type="submit" value="Save" class="btn btn-success" name="save">';
						}
					}
					 ?>
				</div>
			</div>
		</form>
		<?php
			// $hex = bin2hex("End of Term Student Result");
			// var_dump($hex);
		?> 
	</div>
</body>
</html>