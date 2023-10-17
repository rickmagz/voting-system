<?php

session_start();
include 'db.php';

$studentid = $_GET['id'];

    if (isset($_POST['submit'])) {
        $newpassword = $_POST['newpassword'];

        $updatepassword = mysqli_query($cxn, "UPDATE student SET password = '$newpassword' WHERE student_id = '$studentid'") or die("Error in query: $updatepassword." . mysqli_error($cxn));

        echo "<script type='text/javascript'> alert('Password changed! Please log in again!'); location.href = 'login.php'; </script>";
    }
