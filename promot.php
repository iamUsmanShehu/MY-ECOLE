<?php
// $servername = "your_servername";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_dbname";

  include("includes/config.php");


// Create a connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

if(isset($_POST['auto_promote_prim'])) {
    
    // Automatically promote students in Primary
    $sql = "UPDATE students SET class_id = class_id + 1 WHERE class_id < 7  AND section_id = 1";
    if ($con->query($sql) === TRUE) {
        echo "Students in Primary promoted successfully!";
    } else {
        echo "Error promoting students: " . $con->error;
    }
}


if(isset($_POST['auto_promote_jss'])) {
    // Automatically promote students in JSS
    $sql = "UPDATE students SET class_id = class_id + 1 WHERE class_id < 4  AND section_id = 2";
    if ($con->query($sql) === TRUE) {
        echo "Students in JSS promoted successfully !";
    } else {
        echo "Error promoting students: " . $con->error;
    }
}

if(isset($_POST['auto_promote_sss'])) {
    // Automatically promote students in SSS
    $sql = "UPDATE students SET class_id = class_id + 1 WHERE class_id < 4  AND section_id = 3";
    if ($con->query($sql) === TRUE) {
        echo "Students in SSS promoted successfully!";
    } else {
        echo "Error promoting students: " . $con->error;
    }
}

if(isset($_POST['promote_single'])) {
    // Promote a single student to a specific class
    $student_id = $_POST['student_id'];
    $new_class = $_POST['new_class'];

    $sql = "UPDATE students SET class_id = $new_class WHERE id = $student_id";
    if ($con->query($sql) === TRUE) {
        echo "Student promoted successfully!";
    } else {
        echo "Error promoting student: " . $con->error;
    }
}

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Promotion</title>
</head>
<body>
    <!-- promote primary -->
    <form method="post" action="">
        <button type="submit" name="auto_promote_prim">Automatically Promote Students in Primary</button>
    </form>

    <!-- promote JSS -->
    <form method="post" action="">
        <button type="submit" name="auto_promote_jss">Automatically Promote Students in JSS</button>
    </form>

    <!-- promote SSS -->
    <form method="post" action="">
        <button type="submit" name="auto_promote_sss">Automatically Promote Students SSS</button>
    </form>


    <form method="post" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id"><br><br>

        <label for="new_class">New Class:</label>
        <input type="number" id="new_class" name="new_class" min="1" max="6"><br><br>

        <button type="submit" name="promote_single">Promote Single Student</button>
    </form>
</body>
</html>
