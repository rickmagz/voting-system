<?php
session_start();
require 'db.php';

$student_id = $_SESSION['id'];
$council = $_SESSION['council'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ballot - ISATU Miagao Campus Student Republic Election</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg py-3" style="box-shadow: 0px 0px 20px var(--bs-yellow);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ISAT-U-logo-shadow1.png" width="50px" height="50px"><img src="assets/img/sr-logo.png" width="50px" height="50px"><span style="margin-left: 9px;font-family: Muli;color: var(--bs-blue);font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" style="background: var(--bs-blue);border-radius: 10px;color: var(--bs-gray-100);font-weight: bold;" href="vote.php">VOTE NOW</a></li>
                    <li class="nav-item" style="padding: 8px;"><a class="nav-link active" style="padding: 0px;" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="candidates.php">Candidates</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <form data-aos="zoom-out" id="vote" action="vote.php" method="post">
                <div class="row" style="margin: 36px;padding-top: 16px;padding-bottom: 16px;border-style: solid;">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-4 text-end"><img class="img-fluid" src="assets/img/ISAT-U-logo-shadow1.png" width="81" height="102" style="width: 102px;height: 102px;"></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-2 offset-0"><img class="img-fluid" src="assets/img/sr-logo.png" width="102" height="102"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 offset-xl-0">
                        <h4 class="text-center" style="font-family: Lato, sans-serif;margin-bottom: 0px;padding: 0px;"><strong>ISATU Miagao Campus</strong><br><strong>Student Republic Election</strong><br><strong>OFFICIAL BALLOT</strong><br></h4>
                    </div>
                    <div class="col-xl-12" style="padding-bottom: 24px;">
                        <hr style="border-radius: 88px;border-width: 4px;border-color: var(--bs-black);">
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="pres_select" style="text-align: left;">
                        <h6 style="font-family: Muli;text-align: left; font-weight:bold;">PRESIDENT (SELECT 1)</h6>
                    </div>

                    <?php
                    //get president candidates
                    $p = 0;
                    $pres_list = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='President'");
                    if (mysqli_num_rows($pres_list) > 0) {
                        while ($pres = mysqli_fetch_array($pres_list)) {
                            $pres_id = $pres['student_id'];
                            $pres_fname = $pres['first_name'];
                            $pres_lname = $pres['last_name'];

                            $p++;

                    ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                                <div class="form-check"><input class="form-check-input" type="radio" id="pres" name="pres" value="<?php echo $pres_id; ?>"><label class="form-check-label" for="pres-1"><?php echo $pres_fname; ?> <?php echo $pres_lname; ?></label></div>
                            </div>

                    <?php
                        }
                    } else {
                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1" style="color: red;">None registered.</div>';
                    }
                    ?>

                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="vicepres_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px; font-weight:bold;">VICE PRESIDENT (SELECT 1)</h6>
                    </div>

                    <?php
                    //get vice pres candidates
                    $vp = 0;
                    $vp_list = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice President'");
                    if (mysqli_num_rows($vp_list) > 0) {
                        while ($vice = mysqli_fetch_array($vp_list)) {
                            $vp_id = $vice['student_id'];
                            $vp_fname = $vice['first_name'];
                            $vp_lname = $vice['last_name'];

                            $vp++;
                    ?>
                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                                <div class="form-check"><input class="form-check-input" type="radio" id="vice" name="vicepres" value="<?php echo $vp_id; ?>"><label class="form-check-label" for="formCheck-5"><?php echo $vp_fname; ?> <?php echo $vp_lname; ?></label></div>
                            </div>
                    <?php
                        }
                    } else {
                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1" style="color: red;">None registered.</div>';
                    }
                    ?>

                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="senator_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px; font-weight:bold;">SENATOR (SELECT 12)</h6>
                    </div>

                    <?php
                    //get senator candidates
                    $sen = 0;
                    $sen_list = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Senator'");
                    if (mysqli_num_rows($sen_list) > 0) {
                        while ($s = mysqli_fetch_array($sen_list)) {
                            $sen_id = $s['student_id'];
                            $sen_fname = $s['first_name'];
                            $sen_lname = $s['last_name'];

                            $sen++;

                    ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-1 offset-xl-1">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="senator" name="senator[]" value="<?php echo $sen_id; ?>"><label class="form-check-label" for="formCheck-9"><?php echo $sen_fname; ?> <?php echo $sen_lname; ?><br></label></div>
                            </div>

                    <?php
                        }
                    } else {
                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1" style="color: red;">None registered.</div>';
                    }
                    ?>

                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="batchrep_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px; font-weight:bold;">BATCH REPRESENTATIVE (SELECT 2)</h6>
                    </div>

                    <?php
                    //get batch rep candidates
                    $b = 0;
                    $br_list = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' AND council='$council'");
                    if (mysqli_num_rows($br_list) > 0) {
                        while ($br = mysqli_fetch_array($br_list)) {
                            $br_id = $br['student_id'];
                            $br_fname = $br['first_name'];
                            $br_lname = $br['last_name'];

                            $b++;
                    ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="batchrep" name="batchrep[]" value="<?php echo $br_id; ?>"><label class="form-check-label" for="sen-9"><?php echo $br_fname; ?> <?php echo $br_lname; ?> </label></div>
                            </div>

                    <?php

                        }
                    } else {
                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1" style="color: red;">None registered.</div>';
                    }
                    ?>

                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="gov_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px; font-weight:bold;">GOVERNOR (SELECT 1)</h6>
                    </div>

                    <?php
                    //get governor candidates
                    $gov = 0;
                    $gov_list = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor'  AND council='$council'");
                    if (mysqli_num_rows($gov_list) > 0) {
                        while ($g = mysqli_fetch_array($gov_list)) {
                            $gov_id = $g['student_id'];
                            $gov_fname = $g['first_name'];
                            $gov_lname = $g['last_name'];

                            $gov++;

                    ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                                <div class="form-check"><input class="form-check-input" type="radio" id="gov" name="gov" value="<?php echo $gov_id; ?>"><label class="form-check-label" for="formCheck-1"><?php echo $gov_fname; ?> <?php echo $gov_lname; ?></label></div>
                            </div>

                    <?php

                        }
                    } else {
                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1" style="color: red;">None registered.</div>';
                    }
                    ?>

                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="vicegov_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px; font-weight:bold;">VICE GOVERNOR (SELECT 1)</h6>
                    </div>

                    <?php
                    //get vice gov candidates
                    $vg = 0;
                    $vg_list = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' AND council='$council'");
                    if (mysqli_num_rows($vg_list) > 0) {
                        while ($v = mysqli_fetch_array($vg_list)) {
                            $vg_id = $v['student_id'];
                            $vg_fname = $v['first_name'];
                            $vg_lname = $v['last_name'];

                            $vg++;

                    ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                                <div class="form-check"><input class="form-check-input" type="radio" id="vicegov" name="vicegov" value="<?php echo $vg_id; ?>"><label class="form-check-label" for="gov-1"><?php echo $vg_fname; ?> <?php echo $vg_lname; ?></label></div>
                            </div>

                    <?php


                        }
                    } else {
                        echo '<div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1" style="color: red;">None registered.</div>';
                    }
                    ?>


                    <div class="col-lg-10 offset-lg-1" id="form_btn" style="text-align: center;">
                        <button class="btn btn-primary" id="submit_btn" type="submit" style="margin: 10px;text-align: left;" name="submit" form="vote">submit</button>
                        <a class="btn btn-secondary" role="button" id="back_btn" style="margin: 10px;" href="dashboard.php">back to home</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php
    //sending votes to database
    if (isset($_POST['submit'])) {
        $vote_pres = $_POST['pres'];
        $vote_vp = $_POST['vicepres'];
        $vote_sen = $_POST['senator'];
        $vote_brep = $_POST['batchrep'];
        $vote_gov = $_POST['gov'];
        $vote_vicegov = $_POST['vicegov'];

        $voter_id = $_SESSION['id'];
        $voter_council = $_SESSION['council'];
        $president_id = $vote_pres;
        $vice_president_id = $vote_vp;
        $senator_ids = implode(',', $vote_sen);
        $batch_rep_ids = implode(',', $vote_brep);
        $gov_id = $vote_gov;
        $vicegov_id = $vote_vicegov;


        $query = "INSERT INTO votes (student_id, council, pres, vicepres, senator, batchrep, gov, vicegov) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($cxn, $query);
        mysqli_stmt_bind_param($stmt, "ssssssss", $voter_id, $voter_council, $president_id, $vice_president_id, $senator_ids, $batch_rep_ids, $gov_id, $vicegov_id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>alert('Votes Recorded!'); location.href = 'dashboard.php'; </script>";
        } else {
            echo "Error: " . mysqli_error($cxn);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($cxn);
    }
    ?>
    <footer style="background: var(--bs-primary);box-shadow: 0px -2px 20px var(--bs-blue);" data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-white);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>