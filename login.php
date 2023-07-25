<?php
session_start();
include 'db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - ISATU Miagao Campus Student Republic Election</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body>
    <header class="masthead">
        <div class="container" id="header" style="background: #ffffff;color: var(--bs-blue);padding-top: 5px;padding-bottom: 5px;border-radius: 20px;">
            <div class="row" style="padding-top: 24px;">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 offset-1 text-center" style="text-align: right;margin: 0px;"><img src="assets/img/ISAT-U-logo-shadow1.png" style="width: 100px;height: 100px;padding-top: 5px;"><img src="assets/img/sr-logo.png" style="width: 100px;height: 100px;padding-top: 5px;"></div>
            </div>
        </div>
        <div class="container">
            <form action="login.php" method="POST" id="login">
                <hr>
                <div class="card" style="box-shadow: 0px 0px 20px var(--bs-gray);">
                    <div class="card-body" style="color: var(--bs-black);">
                        <h2 class="text-center" style="font-family: Muli;"><strong>Log in as Voter</strong></h2>
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-6 offset-sm-1 offset-md-2 offset-lg-2 offset-xl-3" id="username">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
                                    <label for="email">Username</label>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-8 col-lg-8 col-xl-6 offset-sm-1 offset-md-2 offset-lg-2 offset-xl-3" id="password">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                                    <label for="email">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 text-center" id="username-1"><button class="btn btn-primary" type="submit" name="login" form="login">Log In</button><a class="btn btn-secondary" role="button" href="index.php">Back to home</a></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = mysqli_query($cxn, "SELECT * FROM student WHERE username='$username' AND password='$password'");

        if (mysqli_num_rows($login) > 0) {
            $l = mysqli_fetch_assoc($login);
            $_SESSION['first_name'] = $l['first_name'];
            $_SESSION['last_name'] = $l['last_name'];
            $_SESSION['username'] = $l['username'];
            $_SESSION['id'] = $l['student_id'];
            $_SESSION['council'] = $l['council'];
            header("location: dashboard.php?=#");
        } else {
            echo '<script type="text/javascript"> alert("Invalid Credentials!")</script>';
        }
    }
    ?>

    <footer style="background: var(--bs-body-bg);" data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-black);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" style="color: var(--bs-blue);text-decoration: none;">Privacy</a></li>
                <li class="list-inline-item"><a href="#" style="color: var(--bs-blue);text-decoration: none;">Terms</a></li>
                <li class="list-inline-item"><a href="#" style="color: var(--bs-blue);text-decoration: none;">Admin</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>