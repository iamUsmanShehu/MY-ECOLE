<?php

    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    // Initialize the statement
    $stmt = mysqli_prepare($con, "SELECT * FROM `users` WHERE email = ? OR username = ?");

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ss", $email, $username);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        // Retrieve and store the data in $_SESSION as needed
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['dbid'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['last_login'] = $row['last_login'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
    }

    //Retrive  and calculate the total number of registred students
    $query_students = mysqli_prepare($con, "SELECT COUNT(id) AS 'total_students' FROM `students`");
    mysqli_stmt_execute($query_students);
    $data = mysqli_stmt_get_result($query_students);
    $row = mysqli_fetch_assoc($data);
    $total_students = $row['total_students'];

    //Retrive  and calculate the total number of Classes
    $query_classes = mysqli_prepare($con, "SELECT COUNT(id) AS 'total_classes' FROM `classes`");
    mysqli_stmt_execute($query_classes);
    $data = mysqli_stmt_get_result($query_classes);
    $row = mysqli_fetch_assoc($data);
    $total_classes = $row['total_classes']-3;   

     //Retrive  and calculate the total number of Subjects
    $query_subjects = mysqli_prepare($con, "SELECT COUNT(id) AS 'total_subjects' FROM `subjects`");
    mysqli_stmt_execute($query_subjects);
    $data = mysqli_stmt_get_result($query_subjects);
    $row = mysqli_fetch_assoc($data);
    $total_subjects = $row['total_subjects'];

     //Retrive  and calculate the total number of Results
    $query_grades = mysqli_prepare($con, "SELECT DISTINCT COUNT(student_id) AS 'total_grades' FROM `grades`");
    mysqli_stmt_execute($query_grades);
    $data = mysqli_stmt_get_result($query_grades);
    $row = mysqli_fetch_assoc($data);
    $total_grades = $row['total_grades'];

    

?>