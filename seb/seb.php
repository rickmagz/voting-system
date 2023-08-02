<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ISATU Voting System</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Basic-icons.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-none" style="padding-top: 0px;padding-bottom: 0px;background: linear-gradient(-180deg, var(--bs-yellow) 39%, rgba(255,255,255,0.5) 100%);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img width="75" height="75" src="../assets/img/ISAT-U-logo-shadow1.png"><img width="75" height="75" src="../assets/img/sr-logo.png"><span style="margin-left: 4px;font-family: Lato, sans-serif;font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election <br>Dashboard</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto" style="color: var(--bs-black);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#masthead" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#candidates" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">The Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#tally" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">Tally of Votes</a></li>
                    <li class="nav-item dropstart"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">More</a>
                        <div class="dropdown-menu dropdown-menu-start" style="border-radius: 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;border-width: 1px;color: var(--bs-navbar-brand-color);"><a class="dropdown-item" style="--bs-body-color: var(--bs-navbar-brand-color);" href="election_mgt.php">Election<br>Management</a><a class="dropdown-item" href="seb.php">About S.E.B.</a><a class="dropdown-item" href="results.php">Print Election<br>Results</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#" style="text-align: left;"><img width="30" height="30" src="../assets/img/Screenshot_2021-01-28-04-41-56-92.jpg">&nbsp;<?php echo $_SESSION['first_name']; ?></a><a class="dropdown-item" href="settings.php" style="background: var(--bs-blue);color: var(--bs-dropdown-bg);">Settings</a><a class="dropdown-item" href="./logout.php" style="background: var(--bs-red);color: var(--bs-dropdown-bg);">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin-bottom: 300px;">
        <div class="row" style="margin-top: 128px;margin-right: 24px;margin-left: 24px;">
            <div class="col-sm-7 col-md-4 col-lg-6 col-xl-4 offset-xl-1 align-self-center"><img class="img-fluid" src="../assets/img/undraw_People_re_8spw.png" width="400"></div>
            <div class="col-sm-12 col-md-8 col-lg-6 col-xl-6 offset-md-0 align-self-center">
                <h2 style="font-family: Lato, sans-serif;font-weight: bold;">ISATU Miagao Campus<br></h2>
                <h2 style="font-family: Lato, sans-serif;font-weight: bold;">Student Electoral Committee<br></h2>
                <p>We are best known as ISATU Electoral Board <br>and composed of students duly elected during <br>the&nbsp;Student Republic Representative Assembly <br>from the various departments, namely: <br>BIT, HBM, Computer Studies and Education,<br>with 3 officers per department.</p>
            </div>
        </div>
    </main>
    <footer style="background: var(--bs-primary);box-shadow: 0px -2px 20px var(--bs-blue);" data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-white);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023 All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/new-age.js"></script>
</body>

</html>