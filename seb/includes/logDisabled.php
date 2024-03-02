<?php
include '../db.php';

//update query
$enabledLog = mysqli_query($cxn, "UPDATE election SET current_status='ENABLED' WHERE status_name='LOGIN'") or die("Error in query: $enabledLog." . mysqli_error($cxn));

$enableReg = mysqli_query($cxn, "UPDATE election SET current_status='DISABLED' WHERE status_name='REGISTRATION'") or die("Error in query: $enableReg." . mysqli_error($cxn));

echo "<script type='text/javascript'> alert('Student login ENABLED!'); location.href = '../settings.php'; </script>";
