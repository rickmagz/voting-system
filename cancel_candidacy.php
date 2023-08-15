<?php
include 'db.php';
if (isset($_REQUEST['id'])) {
$id = $_REQUEST['id'];
    mysqli_query($cxn, "DELETE FROM candidates WHERE student_id='$id'") or die(mysqli_error($cxn));
    echo "<script type='text/javascript'> alert('Candidacy Cancelled!'); location.href = 'myaccount.php'; </script>";
}

?>