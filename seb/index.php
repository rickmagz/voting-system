<?php
session_start();
include '../db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Log in - ISATU Student Election Commission</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap" />
  <link rel="stylesheet" href="../assets/css/custom.css" />
  <link rel="stylesheet" href="../assets/css/Hero-Clean-images.css" />
  <link rel="stylesheet" href="../assets/css/Login-Form-Basic-icons.css" />
</head>

<body id="page-top" data-bs-target="#mainNav" data-bs-offset="56">
  <header class="masthead" style="
        background: url('../assets/img/bg-pattern.png') center / auto,
          repeating-linear-gradient(
            131deg,
            var(--bs-gray-100) 0%,
            var(--bs-primary) 100%
          );
        padding-top: 24px;
        padding-bottom: 24px;
      ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-12 offset-xl-8" style="text-align: center; margin: 0px">
          <div class="card mb-5" style="background: var(--bs-card-cap-bg); border-style: none">
            <div class="card-body d-flex flex-column align-items-center" style="
                  background: var(--bs-card-bg);
                  border-radius: 24px;
                  padding-bottom: 0px;
                  padding-top: 36px;
                ">
              <div>
                <img src="../assets/img/ISAT-U-logo-shadow1.png" style="width: 100px; height: 100px" /><img src="../assets/img/sr-logo.png" style="width: 100px; height: 100px" /><span style="font-size: 24px; color: var(--bs-blue)"><br /><strong>ISATU - Miagao Campus</strong><br /><strong>Student Electoral Commission Dashboard</strong><br /></span>
              </div>
              <form class="text-center" action="index.php" method="post" style="margin: 5px" id="login">
                <div class="row" style="padding-top: 28px; padding-bottom: 28px">
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2" style="padding-bottom: 12px">
                    <input class="form-control" type="text" name="username" placeholder="Enter username" autofocus="" required="" />
                  </div>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2">
                    <input class="form-control" type="password" name="password" placeholder="Enter Password" />
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3 align-self-center" style="padding-top: 15px">
                    <button class="btn btn-primary d-block w-100" type="submit" name="login" form="login">
                      Login
                    </button>
                  </div>
                </div>
                <p class="text-muted">
                  <br /><span style="color: rgb(0, 0, 0)">©&nbsp;ISATU - Miagao Campus Student Republic Election
                    2023. All Rights Reserved.</span><br /><br />
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $login = mysqli_query($cxn, "SELECT * FROM seb WHERE username='$username' AND password='$pass'");

    if (mysqli_num_rows($login) > 0) {
      $l = mysqli_fetch_assoc($login);
      $_SESSION['username'] = $l['username'];
      $_SESSION['student_id'] = $l['student_id'];
      $_SESSION['first_name'] = $l['first_name'];
      $_SESSION['last_name'] = $l['last_name'];
      header("location: home.php");
    } else {
      echo '<script type="text/javascript"> alert("Invalid Credentials!")</script>';
    }
  }
  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/bs-init.js"></script>
  <script src="../assets/js/new-age.js"></script>
</body>

</html>