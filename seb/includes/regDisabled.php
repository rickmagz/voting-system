<?php
include '../db.php';

//update query
$disabledReg = mysqli_query($cxn, "UPDATE election SET current_status='ENABLED' WHERE status_name='REGISTRATION'") or die("Error in query: $disabledReg." . mysqli_error($cxn));

$disableLog = mysqli_query($cxn,"UPDATE election SET current_status='DISABLED' WHERE status_name='LOGIN'") or die("Error in query: $disableLog.".mysqli_error($cxn));

echo "<script type='text/javascript'> alert('Student registration ENABLED!'); location.href = '../settings.php'; </script>";
