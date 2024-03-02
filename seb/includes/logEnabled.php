<?php
include '../db.php';

//update query
$disabledLog = mysqli_query($cxn, "UPDATE election SET current_status='DISABLED' WHERE status_name='LOGIN'") or die("Error in query: $disabledLog." . mysqli_error($cxn));

$disabledReg = mysqli_query($cxn, "UPDATE election SET current_status='ENABLED' WHERE status_name='REGISTRATION'") or die("Error in query: $disabledReg." . mysqli_error($cxn));

echo "<script type='text/javascript'> alert('Student login DISABLED!'); location.href = '../settings.php'; </script>";
