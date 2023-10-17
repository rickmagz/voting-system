<?php
session_start();
include 'db.php';

$studentid = $_GET['id'];

$getstudent_info = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$studentid'") or die("Error in query: $getstudent_info." . mysqli_error($cxn));

if (mysqli_num_rows($getstudent_info) > 0) {
    $i = mysqli_fetch_assoc($getstudent_info);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Forgot Password - ISATU Student Election Commission</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css" />
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css" />
</head>

<body id="page-top" data-bs-target="#mainNav" data-bs-offset="56">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-12 offset-xl-8" style="text-align: center;margin: 0px;">
                <div class="card mb-5" style="background: var(--bs-card-cap-bg);border-style: none;">
                    <div class="card-body d-flex flex-column align-items-center" style="background: var(--bs-card-bg);border-radius: 24px;padding-bottom: 0px;padding-top: 36px;">
                        <div><img src="assets/img/ISAT-U-logo-shadow1.png" style="width: 100px;height: 100px;" /><img src="assets/img/sr-logo.png" style="width: 100px;height: 100px;" /><span style="font-size: 24px;color: var(--bs-blue);"><br /><strong>ISATU - Miagao Campus</strong><br /><strong>Student Republic Online Voting System</strong></span></div>
                        <div><span style="font-size: 16px;color: var(--bs-body-color);"><br />New Password for <?php echo $i['student_id']; ?></span></div>
                        <form class="text-center" method="post" style="margin: 5px;" action="resetsuccess.php?id=<?php echo $studentid; ?>">
                            <div class=" row">
                                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-10 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2 offset-xxl-1" style="padding-bottom: 12px;">
                                    <input class="form-control" type="password" name="newpassword" placeholder="New Password" autofocus required />
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 align-self-center" style="padding-top: 15px;">
                                    <button class="btn btn-primary d-block w-100" type="submit" name="submit">submit</button>
                                    <a href="index.php" class="btn btn-secondary d-block w-100" type="submit">back to home</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>