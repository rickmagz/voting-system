<?php
include 'db.php';

//registration status
$get_regStat = mysqli_query($cxn, "SELECT * FROM election WHERE status_name='REGISTRATION' AND current_status='ENABLED'") or die("Error in query: $get_regStat." . mysqli_error($cxn));

//login status
$get_logStat = mysqli_query($cxn, "SELECT * FROM election WHERE status_name='LOGIN' AND current_status='ENABLED'") or die("Error in query: $get_logStat." . mysqli_error($cxn));

if (mysqli_num_rows($get_regStat) == 1) {
    $regButton = '<a class="btn btn-outline-warning btn-xl" role="button" style="font-size: 12px;font-weight: bold;background: var(--bs-blue);margin: 5px;" href="register.php">Register</a>';
} else {
    $regButton = '<a class="btn btn-outline-warning btn-xl disabled" role="button" style="font-size: 12px;font-weight: bold;background: var(--bs-blue);margin: 5px;" href="register.php" >Register</a>';
}

if (mysqli_num_rows($get_logStat) == 1) {
    $logButton = '<a class="btn btn-outline-warning btn-xl" role="button" href="login.php" style="font-size: 12px;font-weight: bold;background: var(--bs-green);">Log in</a>';
} else {
    $logButton = '<a class="btn btn-outline-warning btn-xl  disabled" role="button" href="login.php" style="font-size: 12px;font-weight: bold;background: var(--bs-green);">Log in</a>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - ISATU Student Election Commission</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body id="page-top" data-bs-target="#mainNav" data-bs-offset="56">
    <header class="masthead" style="background: url(&quot;assets/img/bg-pattern.png&quot;), repeating-linear-gradient(131deg, var(--bs-gray-100) 0%, var(--bs-primary) 47%, var(--bs-yellow) 100%);padding-top: 24px;padding-bottom: 24px;">
        <div class="container">
            <div class="row" style="padding-top: 24px;">
                <div class="col-lg-12 col-xl-12 col-xxl-12" style="text-align: center;margin: 0px;">
                    <div><img src="assets/img/ISAT-U-logo-shadow1.png" style="width: 150px;height: 150px;"><img src="assets/img/sr-logo.png" style="width: 150px;height: 150px;"><span style="font-size: 36px;"><br>ISATU - Miagao Campus<br>Student Republic Election<br></span></div>
                    <h4 style="font-family: Muli;line-height: 30.8px;"><br></h4>

                    <?php
                    echo $regButton;

                    echo $logButton;
                    ?>
                    <!-- <a class="btn btn-outline-warning btn-xl" role="button" style="font-size: 12px;font-weight: bold;background: var(--bs-blue);margin: 5px;" href="register.php">Register</a>
                    
                    <a class="btn btn-outline-warning btn-xl" role="button" href="login.php" style="font-size: 12px;font-weight: bold;background: var(--bs-green);">Log in</a> -->
                </div>
            </div>
        </div>
    </header>
    <footer style="position: sticky;background: var(--bs-body-bg);">
        <div class="container">
            <p style="color: var(--bs-black);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023. All Rights Reserved.</p>
            <ul class="list-inline">

                <li class="list-inline-item"><a href="seb/index.php" target="_self" style="color: var(--bs-blue);text-decoration: none;">Admin</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>