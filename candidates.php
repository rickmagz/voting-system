<?php
session_start();
include 'db.php';

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$student_id = $_SESSION['id'];
$council = $_SESSION['council'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Candidates - ISATU Miagao Campus Student Republic Election</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg py-3" style="box-shadow: 0px 0px 20px var(--bs-yellow);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ISAT-U-logo-shadow1.png" width="50px" height="50px"><img src="assets/img/sr-logo.png" width="50px" height="50px"><span style="margin-left: 9px;font-family: Muli;color: var(--bs-blue);font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <?php
                        $voted = mysqli_query($cxn, "SELECT * FROM votes WHERE student_id='$student_id'") or die();
                        $if_voted = mysqli_num_rows($voted);
                        if ($if_voted == 1) {
                            $vote_btn = '<a class="nav-link disabled" style="background: var(--bs-red);border-radius: 10px;color: var(--bs-gray-100);font-weight: bold;" href="vote.php" >VOTED!</a>';
                        } else {
                            $vote_btn = '<a class="nav-link btn btn-primary btn-lg" style="background: var(--bs-blue);border-radius: 10px;color: var(--bs-gray-100);font-weight: bold;" href="vote.php">VOTE NOW</a>';
                        }

                        echo $vote_btn;
                        ?>

                    </li>
                    <li class="nav-item" style="padding: 8px;"><a class="nav-link " style="padding: 0px;" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="candidates.php">Candidates</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container bounce animated" style="margin-top: 18px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" data-bs-spy="scroll" data-bs-smooth-scroll="true">
                    <h2 class="text-uppercase" style="font-family: Muli;font-weight: bold;letter-spacing: 8px;text-align: center;">Meet the Candidates</h2>
                </div>
            </div>
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="200" id="president" style="margin-bottom: 10px;margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">president</h4>
                </div>
                <?php
                //get presidential candidates
                $ip = 0;
                $get_pres = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='President' ORDER BY last_name asc");
                $pres = mysqli_num_rows($get_pres);

                if ($pres > 0) {
                    while ($p = mysqli_fetch_array($get_pres)) {
                        $id = $p['student_id'];
                        $fname = $p['first_name'];
                        $lname = $p['last_name'];
                        $image = $p['image'];

                        $ip++;
                ?>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo $fname; ?> <?php echo $lname; ?> </h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <img class="rounded-circle img-fluid figure-img" src="uploads/<?php echo $image; ?>" width="250px" height="250px" />
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<div class="col-6 col-sm-3 col-md-3">
                              None listed at the moment.
                          </div>';
                }
                ?>


            </div>
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="200" id="vicepres" style="margin-bottom: 10px;margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Vice President</h4>
                </div>
                <?php
                //get vice presidential candidates
                $vp = 0;
                $get_vp = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice President' ORDER BY last_name asc");
                $vicepres = mysqli_num_rows($get_vp);

                if ($vicepres > 0) {
                    while ($v = mysqli_fetch_array($get_vp)) {
                        $id = $v['student_id'];
                        $fname = $v['first_name'];
                        $lname = $v['last_name'];
                        $image = $v['image'];

                        $vp++;
                ?>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo $fname; ?> <?php echo $lname; ?> </h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <img class="rounded-circle img-fluid figure-img" src="uploads/<?php echo $image; ?>" />
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<div class="col-6 col-sm-3 col-md-3">
                              None listed at the moment.
                          </div>';
                }
                ?>
            </div>
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="200" id="senator" style="margin-bottom: 10px;margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Senator</h4>
                </div>
                <?php
                //get senatorial candidates
                $sen = 0;
                $get_sen = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Senator' ORDER BY last_name asc");
                if (mysqli_num_rows($get_sen) > 0) {
                    while ($s = mysqli_fetch_array($get_sen)) {
                        $id = $s['student_id'];
                        $fname = $s['first_name'];
                        $lname = $s['last_name'];
                        $image = $s['image'];

                        $sen++;

                ?>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo $fname; ?> <?php echo $lname; ?></h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="uploads/<?php echo $image; ?>"></figure>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                } else {
                    echo '<div class="col-6 col-sm-3 col-md-3">
                            None listed at the moment.
                        </div>';
                }
                ?>

            </div>
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="200" id="batchrep" style="margin-bottom: 10px;margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Batch Representative</h4>
                </div>
                <?php
                //get batch representatives
                $brep = 0;
                $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' AND council='$council' ORDER BY last_name asc");
                if (mysqli_num_rows($get_brep) > 0) {
                    while ($b = mysqli_fetch_array($get_brep)) {
                        $id = $b['student_id'];
                        $fname = $b['first_name'];
                        $lname = $b['last_name'];
                        $image = $b['image'];

                        $brep++;

                ?>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo $fname; ?> <?php echo $lname; ?></h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="uploads/<?php echo $image; ?>"></figure>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<div class="col-6 col-sm-3 col-md-3">
                            None listed at the moment.
                        </div>';
                }
                ?>

            </div>
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="200" id="gov" style="margin-bottom: 10px;margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Governor</h4>
                </div>
                <?php
                //get governor candidates
                $gov = 0;
                $get_gov = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor' AND council='$council' ORDER BY last_name asc");
                if (mysqli_num_rows($get_gov) > 0) {
                    while ($g = mysqli_fetch_array($get_gov)) {
                        $id = $g['student_id'];
                        $fname = $g['first_name'];
                        $lname = $g['last_name'];
                        $image = $g['image'];

                        $gov++;

                ?>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo $fname; ?> <?php echo $lname; ?></h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="uploads/<?php echo $image; ?>"></figure>
                                </div>
                            </div>
                        </div>

                <?php

                    }
                } else {
                    echo '<div class="col-6 col-sm-3 col-md-3">
                    None listed at the moment.
                </div>';
                }
                ?>

            </div>
        </div>
        <div class="container" data-aos="zoom-out" data-aos-delay="200" id="vicegov" style="margin-bottom: 10px;margin-top: 10px;">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Vice Governor</h4>
                </div>
                <?php
                //get vice governor candidates
                $vgov = 0;
                $get_vg = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' AND council='$council' ORDER BY last_name asc");
                if (mysqli_num_rows($get_vg) > 0) {
                    while ($vg = mysqli_fetch_array($get_vg)) {
                        $id = $vg['student_id'];
                        $fname = $vg['first_name'];
                        $lname = $vg['last_name'];
                        $image = $vg['image'];

                        $vgov++;

                ?>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4><?php echo $fname; ?> <?php echo $lname; ?></h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="uploads/<?php echo $image; ?>"></figure>
                                </div>
                            </div>
                        </div>

                <?php

                    }
                } else {
                    echo '<div class="col-6 col-sm-3 col-md-3">
            None listed at the moment.
        </div>';
                }
                ?>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>