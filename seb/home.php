<?php
session_start();
include '../db.php';

$student_id = $_SESSION['student_id'];
$first_name = $_SESSION['first_name'];

//get data from current session
$session = mysqli_query($cxn, "SELECT * FROM seb WHERE student_id='$student_id'") or die("Error in query: $session." . mysqli_error($cxn));
if (mysqli_num_rows($session) > 0) {
    $s = mysqli_fetch_assoc($session);
}

//get total number of voters in education council
$educ = mysqli_query($cxn, "SELECT council FROM student WHERE council='Education'");
$educ_voters = mysqli_num_rows($educ);

//get total number of voters in computer studies council
$comstud = mysqli_query($cxn, "SELECT council FROM student WHERE council='Computer Studies'");
$comstud_voters = mysqli_num_rows($comstud);

//get total number of voters in BIT council
$bit = mysqli_query($cxn, "SELECT council FROM student WHERE council='B.I.T.'");
$bit_voters = mysqli_num_rows($bit);

//get total number of voters in HBM council
$hbm = mysqli_query($cxn, "SELECT council FROM student WHERE council='H.B.M.'");
$hbm_voters = mysqli_num_rows($hbm);

//get total 
$total = mysqli_query($cxn, "SELECT student_id FROM student");
$total_voters = mysqli_num_rows($total);

//get total number of ballot from education council
$ed = mysqli_query($cxn, "SELECT council FROM votes WHERE council='Education'");
$ed_ballots = mysqli_num_rows($ed);

//get total number of ballot from computer studies council
$cs = mysqli_query($cxn, "SELECT council FROM votes WHERE council='Computer Studies'");
$cs_ballots = mysqli_num_rows($cs);

//get total number of ballot from BIT council
$idtech = mysqli_query($cxn, "SELECT council FROM votes WHERE council='B.I.T.'");
$bit_ballots = mysqli_num_rows($idtech);

//get total number of ballot from HBM council
$hbmgt = mysqli_query($cxn, "SELECT council FROM votes WHERE council='H.B.M.'");
$hbm_ballots = mysqli_num_rows($hbmgt);

//get total ballots
$ballots = mysqli_query($cxn, "SELECT council from votes");
$total_ballot = mysqli_num_rows($ballots);

//latest update of tally of votes
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i:s A');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - ISATU Miagao Campus Student Republic Election - SEC Dashboard</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Basic-icons.css">
</head>

<body data-bs-spy="scroll" data-bs-smooth-scroll="true" data-bs-target="#navcol-2" style="background: url(&quot;../assets/img/pattern.png&quot;) center, var(--bs-white);" id="masthead">
    <nav class="navbar navbar-light navbar-expand-lg  shadow-none" style="padding-top: 0px;padding-bottom: 0px;background: linear-gradient(-180deg, var(--bs-yellow) 39%, rgba(255,255,255,0.5) 100%);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img width="75" height="75" src="../assets/img/ISAT-U-logo-shadow1.png"><img width="75" height="75" src="../assets/img/sr-logo.png"><span style="margin-left: 4px;font-family: Lato, sans-serif;font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election <br>Dashboard</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto" style="color: var(--bs-black);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#masthead" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#candidates" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">The Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#tally" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">Tally of Votes</a></li>
                    <li class="nav-item dropstart"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">More</a>
                        <div class="dropdown-menu dropdown-menu-start" style="border-radius: 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;border-width: 1px;color: var(--bs-navbar-brand-color);">
                            <a class="dropdown-item" style="--bs-body-color: var(--bs-navbar-brand-color);" href="election_mgt.php">Election<br>Management</a>
                            <a class="dropdown-item" href="seb.php">About S.E.B.</a>
                            <a class="dropdown-item" href="results.php">Print Election<br>Results</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" style="text-align: left;">Logged in as: &nbsp;<strong><?php echo $_SESSION['first_name']; ?></strong></a>
                            <a class="dropdown-item" href="settings.php" style="background: var(--bs-blue);color: var(--bs-dropdown-bg);">Settings</a>
                            <a class="dropdown-item" href="./logout.php" style="background: var(--bs-red);color: var(--bs-dropdown-bg);">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin-bottom: 70px;">
        <div class="row" style="margin-right: 24px;margin-left: 24px;">
            <div class="col-sm-10 col-md-12 col-lg-4 col-xl-5 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0 text-center align-self-center" data-aos="zoom-out" id="welcome" style="text-align: left;padding: 0px;padding-right: -1px;">
                <h2 class="text-center" style="font-family: Muli;font-weight: bold;margin: 0px;">Hello, <?php echo $_SESSION['first_name']; ?>!</h2><img class="img-fluid" src="../assets/img/undraw_Engineering_team_a7n2.png" style="width: 474px;" width="465" height="271">
            </div>
            <div class="col align-self-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" data-aos="flip-left" data-aos-delay="200" id="reg-voters">
                            <h5 style="font-family: Muli;text-align: center;font-weight: bold;"><strong>Registered Voters</strong></h5>
                            <div class="table-responsive">
                                <table class="table table-striped-columns table-hover table-bordered">
                                    <thead style="text-align: center;background: var(--bs-blue);color: var(--bs-white);">
                                        <tr>
                                            <th>Council</th>
                                            <th style="color: var(--bs-white);">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-width: 1px;border-style: solid;text-align: center;">
                                        <tr style="background: var(--bs-white);">
                                            <td>Computer Studies<br></td>
                                            <td><?php echo $comstud_voters; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background: var(--bs-white);">Education</td>
                                            <td style="background: var(--bs-white);"><?php echo $educ_voters; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background: var(--bs-white);">Hotel and Business Mgt.</td>
                                            <td style="background: var(--bs-white);"><?php echo $hbm_voters; ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background: var(--bs-white);">Industrial Technology</td>
                                            <td style="background: var(--bs-white);"><?php echo $bit_voters; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end text-bg-warning">TOTAL</td>
                                            <td class="text-bg-light"><?php echo $total_voters; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center" data-aos="flip-left" data-aos-delay="200" id="ballots">
                            <h5 style="font-family: Muli;text-align: center;font-weight: bold;"><strong>Ballots Received</strong></h5>
                            <div class="table-responsive">
                                <table class="table table-striped-columns table-hover table-bordered">
                                    <thead style="text-align: center;background: var(--bs-blue);color: var(--bs-white);">
                                        <tr>
                                            <th>Council</th>
                                            <th style="color: var(--bs-white);">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-width: 1px;border-style: solid;text-align: center;background: var(--bs-white);">
                                        <tr>
                                            <td>Computer Studies </td>
                                            <td><?php echo $cs_ballots; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Education</td>
                                            <td><?php echo $ed_ballots; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Hotel and Business Mgt.</td>
                                            <td><?php echo $hbm_ballots; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Industrial Technology</td>
                                            <td><?php echo $bit_ballots; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end text-bg-warning">TOTAL</td>
                                            <td><?php echo $total_ballot; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="candidates" style="margin-top: 24px;">
            <div class="col">
                <div class="container" style="margin-top: 18px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" data-bs-spy="scroll" data-bs-smooth-scroll="true">
                            <h2 class="text-uppercase" style="font-family: Muli;font-weight: bold;letter-spacing: 8px;text-align: center;">Meet the Candidates</h2>
                        </div>
                    </div>
                </div>
                <div class="container" id="president" style="margin-bottom: 10px;margin-top: 10px;">
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
                                $fname = $p['first_name'];
                                $lname = $p['last_name'];
                                $position = $p['position'];
                                $image = $p['image'];
                                $council = $p['council'];

                                $ip++;
                        ?>
                                <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-xxl-0 p-2">
                                    <div class="card h-100 candidate-card">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5 col-xl-5 col-xxl-4 offset-md-0 offset-xl-0 justify-content-center d-flex p-2 candidate-img">
                                                <img class="rounded-circle img-fluid border" src="../uploads/<?php echo $image; ?>" width="100" height="100" />
                                            </div>
                                            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6 offset-md-0 align-items-center align-self-center candidate-info p-3">
                                                <h5 class="fw-normal"><strong><?php echo $fname; ?> <?php echo $lname; ?></strong></h5>
                                                <span><?php echo $p['council']; ?></span>
                                            </div>

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
                <div class="container" id="vicepres" style="margin-bottom: 10px;margin-top: 10px;">
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
                                $fname = $v['first_name'];
                                $lname = $v['last_name'];
                                $position = $v['position'];
                                $image = $v['image'];
                                $council = $v['council'];

                                $vp++;
                        ?>
                                <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-xxl-0 p-2">
                                    <div class="card h-100 candidate-card">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5 col-xl-5 col-xxl-4 offset-md-0 offset-xl-0 justify-content-center d-flex p-2 candidate-img">
                                                <img class="rounded-circle img-fluid border" src="../uploads/<?php echo $image; ?>" width="100" height="100" />
                                            </div>
                                            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6 offset-md-0 align-items-center align-self-center candidate-info p-3">
                                                <h5 class="fw-normal"><strong><?php echo $fname; ?> <?php echo $lname; ?></strong></h5>
                                                <span><?php echo $council; ?></span>
                                            </div>

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
                <div class="container" id="senator" style="margin-bottom: 10px;margin-top: 10px;">
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
                                $council = $s['council'];

                                $sen++;

                        ?>
                                <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-xxl-0 p-2">
                                    <div class="card h-100 candidate-card">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5 col-xl-5 col-xxl-4 offset-md-0 offset-xl-0 justify-content-center d-flex p-2 candidate-img">
                                                <img class="rounded-circle img-fluid border" src="../uploads/<?php echo $image; ?>" width="100" height="100" />
                                            </div>
                                            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6 offset-md-0 align-items-center align-self-center candidate-info p-3">
                                                <h5 class="fw-normal"><strong><?php echo $fname; ?> <?php echo $lname; ?></strong></h5>
                                                <span><?php echo $council; ?></span>
                                            </div>

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
                <div class="container" id="batchrep" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Batch Representative</h4>
                        </div>
                        <?php
                        //get batch representatives
                        $brep = 0;
                        $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' ORDER BY last_name asc");
                        if (mysqli_num_rows($get_brep) > 0) {
                            while ($b = mysqli_fetch_array($get_brep)) {
                                $id = $b['student_id'];
                                $fname = $b['first_name'];
                                $lname = $b['last_name'];
                                $image = $b['image'];
                                $council = $b['council'];

                                $brep++;

                        ?>
                                <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-xxl-0 p-2">
                                    <div class="card h-100 candidate-card">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5 col-xl-5 col-xxl-4 offset-md-0 offset-xl-0 justify-content-center d-flex p-2 candidate-img">
                                                <img class="rounded-circle img-fluid border" src="../uploads/<?php echo $image; ?>" width="100" height="100" />
                                            </div>
                                            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6 offset-md-0 align-items-center align-self-center candidate-info p-3">
                                                <h5 class="fw-normal"><strong><?php echo $fname; ?> <?php echo $lname; ?></strong></h5>
                                                <span><?php echo $council; ?></span>
                                            </div>

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
                <div class="container" id="gov" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Governor</h4>
                        </div>
                        <?php
                        //get governor candidates
                        $gov = 0;
                        $get_gov = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor' ORDER BY last_name asc");
                        if (mysqli_num_rows($get_gov) > 0) {
                            while ($g = mysqli_fetch_array($get_gov)) {
                                $id = $g['student_id'];
                                $fname = $g['first_name'];
                                $lname = $g['last_name'];
                                $image = $g['image'];
                                $council = $g['council'];

                                $gov++;

                        ?>
                                <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-xxl-0 p-2">
                                    <div class="card h-100 candidate-card">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5 col-xl-5 col-xxl-4 offset-md-0 offset-xl-0 justify-content-center d-flex p-2 candidate-img">
                                                <img class="rounded-circle img-fluid border" src="../uploads/<?php echo $image; ?>" width="100" height="100" />
                                            </div>
                                            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6 offset-md-0 align-items-center align-self-center candidate-info p-3">
                                                <h5 class="fw-normal"><strong><?php echo $fname; ?> <?php echo $lname; ?></strong></h5>
                                                <span><?php echo $council; ?></span>
                                            </div>

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
                <div class="container" id="vicegov" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Vice Governor</h4>
                        </div>
                        <?php
                        //get vice governor candidates
                        $vgov = 0;
                        $get_vg = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' ORDER BY last_name asc");
                        if (mysqli_num_rows($get_vg) > 0) {
                            while ($vg = mysqli_fetch_array($get_vg)) {
                                $id = $vg['student_id'];
                                $fname = $vg['first_name'];
                                $lname = $vg['last_name'];
                                $image = $vg['image'];
                                $council = $vg['council'];

                                $vgov++;

                        ?>
                                <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 col-xxl-4 offset-xxl-0 p-2">
                                    <div class="card h-100 candidate-card">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-5 col-xl-5 col-xxl-4 offset-md-0 offset-xl-0 justify-content-center d-flex p-2 candidate-img">
                                                <img class="rounded-circle img-fluid border" src="../uploads/<?php echo $image; ?>" width="100" height="100" />
                                            </div>
                                            <div class="col-md-12 col-lg-7 col-xl-7 col-xxl-6 offset-md-0 align-items-center align-self-center candidate-info p-3">
                                                <h5 class="fw-normal"><strong><?php echo $fname; ?> <?php echo $lname; ?></strong></h5>
                                                <span><?php echo $council; ?></span>
                                            </div>

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
            </div>
        </div>

        <?php include './includes/count_votes.php'; ?>

        <div class="row" id="tally" style="margin-bottom: 12px;margin-top: 12px;margin-right: 24px;margin-left: 24px;">
            <div class="col-lg-12" id="tally-header">
                <div class="container" style="padding: 0px;">
                    <section style="padding: 12px;padding-top: 12px;margin: 24px;">
                        <div class="container">
                            <div class="pb-2 pb-lg-1">
                                <h3 class="fw-bold mb-2" style="text-align: center;">Tally of Votes</h3>
                                <p class="mb-0" style="text-align: center;">Last Update: <?php echo $date; ?></p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-3" style="border-width: 1.4px;">
                <p class="fs-5"><strong>PRESIDENT</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get presidential candidates
                            $ip = 0;
                            $get_pres = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='President' ORDER BY last_name asc");
                            $pres = mysqli_num_rows($get_pres);



                            if ($pres > 0) {
                                while ($p = mysqli_fetch_array($get_pres)) {
                                    $fname = $p['first_name'];
                                    $lname = $p['last_name'];

                                    // Get candidate ID to access vote count from the $pres_votes array
                                    $candidate_id = $p['student_id'];

                                    // Access the vote count for the current candidate from the $pres_votes array
                                    $vote_count = isset($pres_votes[$candidate_id]) ? $pres_votes[$candidate_id] : 0;


                                    $ip++;
                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>

                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-3">
                <p class="fs-5"><strong>VICE PRESIDENT</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get vice presidential candidates
                            $vp = 0;
                            $get_vp = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice President' ORDER BY last_name asc");
                            $vicepres = mysqli_num_rows($get_vp);

                            if ($vicepres > 0) {
                                while ($v = mysqli_fetch_array($get_vp)) {
                                    $fname = $v['first_name'];
                                    $lname = $v['last_name'];

                                    // Get candidate ID to access vote count from the $vicepres_votes array
                                    $candidate_id = $v['student_id'];

                                    // Access the vote count for the current candidate from the $vicepres_votes array
                                    $vote_count = isset($vp_votes[$candidate_id]) ? $vp_votes[$candidate_id] : 0;

                                    $vp++;
                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-3">
                <p class="fs-5"><strong>SENATOR</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get senatorial candidates
                            $sen = 0;
                            $get_sen = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Senator' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_sen) > 0) {
                                while ($s = mysqli_fetch_array($get_sen)) {
                                    $fname = $s['first_name'];
                                    $lname = $s['last_name'];

                                    // Get candidate ID to access vote count from the $sen_votes array
                                    $candidate_id = $s['student_id'];

                                    // Access the vote count for the current candidate from the $sen_votes array
                                    $vote_count = isset($sen_votes[$candidate_id]) ? $sen_votes[$candidate_id] : 0;


                                    $sen++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>


                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Computer Studies)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get batch representatives
                            $brep = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' AND council='Computer Studies' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $batchrep_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($brep_votes[$candidate_id]) ? $brep_votes[$candidate_id] : 0;

                                    $brep++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Education)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get batch representatives
                            $brep = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' AND council='Education' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $batchrep_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($brep_votes[$candidate_id]) ? $brep_votes[$candidate_id] : 0;

                                    $brep++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td  colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Hotel &amp; Business Mgt.)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get batch representatives
                            $brep = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' AND council='H.B.M.' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $batchrep_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($brep_votes[$candidate_id]) ? $brep_votes[$candidate_id] : 0;

                                    $brep++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Industrial Technology)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get batch representatives
                            $brep = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Batch Representative' AND council='B.I.T.' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $batchrep_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($brep_votes[$candidate_id]) ? $brep_votes[$candidate_id] : 0;

                                    $brep++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>GOVERNOR (Computer Studies)</strong><br></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get governors
                            $gov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor' AND council='Computer Studies' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($g = mysqli_fetch_array($get_brep)) {
                                    $fname = $g['first_name'];
                                    $lname = $g['last_name'];

                                    // Get candidate ID to access vote count from the $batchrep_votes array
                                    $candidate_id = $g['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($gov_votes[$candidate_id]) ? $gov_votes[$candidate_id] : 0;

                                    $gov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>VICE GOVERNOR (Computer Studies)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get vice governors
                            $vgov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' AND council='Computer Studies' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($vicegov_votes[$candidate_id]) ? $vicegov_votes[$candidate_id] : 0;

                                    $vgov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>

                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>GOVERNOR (Education)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get governors
                            $gov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor' AND council='Education' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($gov_votes[$candidate_id]) ? $gov_votes[$candidate_id] : 0;

                                    $gov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>VICE GOVERNOR (Education)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get vice governors
                            $vgov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' AND council='Education' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($vicegov_votes[$candidate_id]) ? $vicegov_votes[$candidate_id] : 0;

                                    $vgov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>GOVERNOR (Hotel &amp;</strong>&nbsp;<strong>Business Mgt.)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get governors
                            $gov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor' AND council='H.B.M.' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($gov_votes[$candidate_id]) ? $gov_votes[$candidate_id] : 0;

                                    $gov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>VICE GOVERNOR (Hotel &amp;</strong>&nbsp;<strong>Business Mgt.)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get vice governors
                            $vgov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' AND council='H.B.M.' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($vicegov_votes[$candidate_id]) ? $vicegov_votes[$candidate_id] : 0;

                                    $vgov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>GOVERNOR (Industrial Technology)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get governors
                            $gov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Governor' AND council='B.I.T.' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($gov_votes[$candidate_id]) ? $gov_votes[$candidate_id] : 0;

                                    $gov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0">
                <p class="fs-5"><strong>VICE GOVERNOR (Industrial Technology)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">No. of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //get governors
                            $vgov = 0;
                            $get_brep = mysqli_query($cxn, "SELECT * FROM candidates WHERE position='Vice Governor' AND council='B.I.T.' ORDER BY last_name asc");
                            if (mysqli_num_rows($get_brep) > 0) {
                                while ($b = mysqli_fetch_array($get_brep)) {
                                    $fname = $b['first_name'];
                                    $lname = $b['last_name'];

                                    // Get candidate ID to access vote count from the $vicegov_votes array
                                    $candidate_id = $b['student_id'];

                                    // Access the vote count for the current candidate from the $batchrep_votes array
                                    $vote_count = isset($vicegov_votes[$candidate_id]) ? $vicegov_votes[$candidate_id] : 0;

                                    $vgov++;

                            ?>
                                    <tr>
                                        <td style="background: var(--bs-white);"><?php echo $lname; ?> <?php echo $fname; ?></td>
                                        <td style="background: var(--bs-white);"><?php echo $vote_count; ?> votes</td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<td colspan="2" style="background: var(--bs-white);">
                              None listed at the moment.
                          </td>';
                            }
                            ?>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/new-age.js"></script>
</body>

</html>