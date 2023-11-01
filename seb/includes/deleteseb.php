<?php

session_start();
include '../db.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    mysqli_query($cxn, "DELETE FROM `seb` WHERE `student_id`='$id'") or die(mysqli_error($cxn));

    echo "<script type='text/javascript'> alert('SEB Info deleted!'); location.href = '../settings.php'; </script>";
}
