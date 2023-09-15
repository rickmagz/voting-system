<?php
session_start();
include '../db.php';

if (isset($_POST['edit'])) {
    $stud_num = $_POST['no'];
    $stud_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $update = mysqli_query($cxn, "UPDATE seb SET student_id='$stud_id', username='$username', password='$password', first_name='$firstname', last_name='$lastname' WHERE id='$stud_num'") or die("Error in query: $update." . mysqli_error($cxn));

    echo "<script type='text/javascript'> alert('Successfully Modified. Please log in again!'); location.href = '../index.php'; </script>";
}
