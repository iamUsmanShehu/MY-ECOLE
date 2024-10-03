<?php 
include("../includes/config.php");
// include("queries.php");
if (isset($_POST["submit-result"])){
function inseart_data($data){
  foreach ($data as $key => $value) {
    $k[] = $key;
    $v[] = "'".$value."'";
    //var_dump($v);
  }
  $k=implode(",", $k);
  $v=implode(",", $v);
  $con = mysqli_connect("localhost","root", "", "my-echole")or die("problem with connection...");

  $insert = "INSERT INTO grades($k) VALUES($v)";
  mysqli_query($con,$insert);
  echo "<center><img src='../dist/img/loader.gif' style='margin-top:20%;'><br>Saving Grades...</center>";
  header("refresh:2; url='add-result'");
  // var_dump($data);
}

//$data = array();


$hv = htmlspecialchars($_POST["hidden_value"]);
// $ci = 100;
for ($i=1; $i <= $hv; $i++) {

  $total =  htmlspecialchars(intval($_POST['ca'.$i])) +  htmlspecialchars(intval($_POST['exam'.$i]));
  $data = array(
    'total' => $total,
    'session_id' => htmlspecialchars($_POST['session-id']),
    'term_id' => htmlspecialchars($_POST['term-id']),
    'student_id' => htmlspecialchars($_POST['student-id'.$i]),
    'class_id' => htmlspecialchars($_POST['class-id']),
    'subject_id' => htmlspecialchars($_POST['subject-id']),
    'ca' => htmlspecialchars($_POST['ca'.$i]),
    'exam' => htmlspecialchars($_POST['exam'.$i])
   );
    inseart_data($data);
  }

  
}
?>