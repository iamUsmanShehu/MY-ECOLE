<?php
include("../includes/config.php");

$session = mysqli_real_escape_string($con, intval($_POST['session']));
$term = mysqli_real_escape_string($con, intval($_POST['term']));
$addmission_no = mysqli_real_escape_string($con, intval($_POST['addmission_no']));
$pin = mysqli_real_escape_string($con, intval($_POST['pin']));

if (isset($session)) {
    if (isset($term)) {
        if (isset($addmission_no)) {
            if (isset($pin)) {
                // Checking inputed Pin
                $query_pin = mysqli_query($con, "SELECT * FROM pins WHERE pins.pin = '$pin'");
                $check_pin = mysqli_num_rows($query_pin);

                if ($check_pin != 0) {
                    // Checking if student result exists
                    $query_result = mysqli_query($con, "SELECT results.grade_id, results.student_id, results.class_id, results.session_id, results.term_id, results.pin_id, pins.pin FROM results
                        JOIN grades ON results.grade_id = grades.id
                        JOIN students ON results.student_id = students.id
                        JOIN sessions ON results.session_id = sessions.id
                        JOIN terms ON results.term_id = terms.id
                        JOIN pins ON results.pin_id = pins.id
                        WHERE results.student_id = (SELECT students.id FROM students WHERE students.serial_no = $addmission_no) AND results.pin_id = (SELECT pins.id FROM pins WHERE pins.pin = $pin) AND results.session_id = (SELECT sessions.id FROM sessions WHERE sessions.id = $session) AND results.term_id = (SELECT terms.id FROM terms WHERE terms.id = $term);
                    ");
                    $check_result = mysqli_num_rows($query_result);

                    if ($check_result != 0) {
                        echo "<center><img src='../dist/img/loader2.webp' style='margin-top:20%; width:100px;'><br> Result Loading...</center>";
                        header("refresh:2.5; url='../sand/myresult/$addmission_no'");
                    } else {
                        // Checking if Pin exists in the result table
                        $query_pin_exist = mysqli_query($con, "SELECT * FROM results WHERE pin_id = (SELECT pins.id FROM pins WHERE pins.pin = $pin) AND student_id != (SELECT id FROM students WHERE students.serial_no = '$addmission_no')");
                        $check_pin_exist = mysqli_num_rows($query_pin_exist);

                        if ($check_pin_exist != 0) {
                            echo "<center>Pin Already Used</center>";
                        } else {
                            $quary = "SELECT grades.id, grades.status, students.id AS 'student_sn', students.serial_no, sessions.id AS 'session', terms.id AS 'term' FROM grades JOIN students ON grades.student_id = students.id JOIN sessions ON grades.session_id = sessions.id JOIN terms ON grades.term_id = terms.id WHERE grades.student_id = (SELECT students.id FROM students WHERE students.serial_no = $addmission_no)";
                            $result = $con->query($quary);
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $dbsession = $row['session'];
                                $dbterm = $row['term'];
                                $dbserial_no = $row['serial_no'];
                                $status = $row['status'];
                                $dbstudent_id = $row['student_sn'];
                            }

                            $pin_quary = "SELECT pins.id FROM pins WHERE pins.pin = '$pin'"; // Querying Pin ID
                            $pin_result = $con->query($pin_quary);
                            $row = $pin_result->fetch_assoc();
                            $pid = $row['id'];

                            if ($quary != 0) {
                                if ($session == $dbsession) {
                                    if ($term == $dbterm) {
                                        if ($addmission_no == $dbserial_no) {
                                            if ($check_result != 0) {
                                                echo "<center><img src='../dist/img/loader.gif' style='margin-top:20%;'><br>Loading your result...</center>";
                                                header("refresh:2; url='../sand/myresult/$addmission_no'");
                                            } else {
                                                $sql = "INSERT INTO `results`(`grade_id`, `student_id`, `session_id`, `term_id`, `pin_id`) VALUES ('$id','$dbstudent_id','$session','$term','$pid')";
                                                mysqli_query($con, $sql);
                                                if (isset($sql)) {
                                                    echo "<center><img src='../dist/img/animated_progress_bar.gif' style='margin-top:20%;'><br>Loading your result...</center>";
                                                    header("refresh:2; url='../sand/myresult/$addmission_no'");
                                                } else {
                                                    echo "<center>Problem With Inserting...</center>";
                                                }
                                            }
                                        } else {
                                            echo "<center>InValid Addmission Number!</center>";
                                        }
                                    } else {
                                        echo "<center>Invalid Term!</center>";
                                    }
                                } else {
                                    echo "<center>Invalid Session</center>";
                                }
                            } else {
                                echo "<center>Result Not Found!</center>";
                            }
                        }
                    }
                } else {
                    echo "<center>Invalid Pin</center>";
                }
            } else {
                echo "<center>Pin is required to view your result!</center>";
            }
        } else {
            echo "<center>Addmission Number is required to view your result!</center>";
        }
    } else {
        echo "<center>Please Select Term to view your result!</center>";
    }
} else {
    echo "<center>Please Select Session to view your result!</center>";
}

