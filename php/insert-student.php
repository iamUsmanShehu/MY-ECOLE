<?php 
include('../includes/config.php');

if (isset($_POST['submit'])) {
    
    $section_id = mysqli_real_escape_string($con, $_POST['section']);
    $class_id = mysqli_real_escape_string($con, $_POST['class']);
    $serial_no = mysqli_real_escape_string($con, $_POST['serial_no']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $disability = mysqli_real_escape_string($con, $_POST['disability']);
    $state_of_origin = mysqli_real_escape_string($con, $_POST['state_of_origin']);
    $lga_of_origin = mysqli_real_escape_string($con, $_POST['lga_of_origin']);
    $home_address = mysqli_real_escape_string($con, $_POST['home_address']);
    $state_of_residence = mysqli_real_escape_string($con, $_POST['state_of_residence']);
    $lga_of_residence = mysqli_real_escape_string($con, $_POST['lga_of_residence']);
    $address_of_residence = mysqli_real_escape_string($con, $_POST['address_of_residence']);
    // $passport = mysqli_real_escape_string($con, $_POST['passport']);
    $gurdian_name = mysqli_real_escape_string($con, $_POST['gurdian_name']);
    $gurdian_state = mysqli_real_escape_string($con, $_POST['gurdian_state']);
    $gurdian_lga = mysqli_real_escape_string($con, $_POST['gurdian_lga']);
    $gurdian_address = mysqli_real_escape_string($con, $_POST['gurdian_address']);
    $gurdian_phone = mysqli_real_escape_string($con, $_POST['gurdian_phone']);
    $gurdian_ocupation = mysqli_real_escape_string($con, $_POST['gurdian_ocupation']);
    
    $img_name = $_FILES['passport']['name'];
    $img_size = $_FILES['passport']['size'];
    $tmp_name = $_FILES['passport']['tmp_name'];
    $error = $_FILES['passport']['error'];
  
    if ($error === 0) {
      if ($img_size > 125000) {
        echo "Sorry, your file is too large.";
        header("refresh:2; url='student-form'");
      }else {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
  
        $allowed_exs = array("jpg", "jpeg", "png"); 
  
        if (in_array($img_ex_lc, $allowed_exs)) {
          $passport = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'uploads/'.$passport;
          move_uploaded_file($tmp_name, $img_upload_path);
          
          $data = "INSERT INTO `students`(`fname`, `lname`, `gender`, `dob`, `disability`, `state_of_origin`, `lga_of_origin`, `home_address`, `state_of_residence`, `lga_of_residence`, `address_of_residence`, `section_id`, `class_id`, `serial_no`, `passport`, `gurdian_name`, `gurdian_state`, `gurdian_lga`, `gurdian_address`, `gurdian_ocupation`, `gurdian_phone`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    // var_dump($data);


    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $data)) {
      echo "<center><font class='error'>Problem Occur...</font></center>";
    }else{
      mysqli_stmt_bind_param($stmt, 'sssssssssssiissssssss', $fname, $lname, $gender, $dob, $disability, $state_of_origin, $lga_of_origin, $home_address, $state_of_residence, $lga_of_residence,$address_of_residence, $section_id, $class_id, $serial_no, $passport, $gurdian_name, $gurdian_state, $gurdian_lga, $gurdian_address, $gurdian_ocupation, $gurdian_phone);
      mysqli_stmt_execute($stmt);
      if (!$data) {
        echo "<center><font class='success'>Student not Registered</font></center>";
      }else{
        echo "<center><font class='success'>Student Registered Successfully</font></center>";
        header("refresh:2; url='student-form'");
      }
  
    }
  
        }else {
          echo "You can't upload files of this type";
          header("refresh:2; url='student-form'");
        }
      }
    }

    
  }

?>