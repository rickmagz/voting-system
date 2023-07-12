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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Basic-icons.css">
</head>

<body data-bs-spy="scroll" data-bs-smooth-scroll="true" data-bs-target="#navcol-2" style="background: url(&quot;../assets/img/pattern.png&quot;) center, var(--bs-white);">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-none" style="padding-top: 0px;padding-bottom: 0px;background: linear-gradient(-180deg, var(--bs-yellow) 39%, rgba(255,255,255,0.5) 100%);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img width="75" height="75" src="../assets/img/ISAT-U-logo-shadow1.png"><img width="75" height="75" src="../assets/img/sr-logo.png"><span style="margin-left: 4px;font-family: Lato, sans-serif;font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election <br>Dashboard</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto" style="color: var(--bs-black);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.html" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#candidates" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">The Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#tally" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">Tally of Votes</a></li>
                    <li class="nav-item dropstart"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">More</a>
                        <div class="dropdown-menu dropdown-menu-start" style="border-radius: 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;border-width: 1px;color: var(--bs-navbar-brand-color);"><a class="dropdown-item" style="--bs-body-color: var(--bs-navbar-brand-color);" href="election_mgt.html">Election<br>Management</a><a class="dropdown-item" href="seb.html">About S.E.B.</a><a class="dropdown-item" href="results.html">Print Election<br>Results</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#" style="text-align: left;"><img width="30" height="30" src="../assets/img/Screenshot_2021-01-28-04-41-56-92.jpg">&nbsp;Admin</a><a class="dropdown-item" href="settings.html" style="background: var(--bs-blue);color: var(--bs-dropdown-bg);">Settings</a><a class="dropdown-item" href="logout.php" style="background: var(--bs-red);color: var(--bs-dropdown-bg);">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin: 25px;margin-bottom: 70px;">
        <div class="row" id="masthead" style="margin-top: 128px;margin-right: 24px;margin-left: 24px;">
            <div class="col-sm-10 col-md-12 col-lg-4 col-xl-5 offset-sm-1 offset-md-0 offset-lg-0 offset-xl-0 text-center align-self-center" data-aos="zoom-out" id="welcome" style="text-align: left;padding: 0px;padding-right: -1px;">
                <h2 class="text-center" style="font-family: Muli;font-weight: bold;margin: 0px;">Hi, admin!</h2><img class="img-fluid" src="../assets/img/undraw_Engineering_team_a7n2.png" style="width: 474px;" width="465" height="271">
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
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td style="background: var(--bs-white);">Education</td>
                                            <td style="background: var(--bs-white);">-</td>
                                        </tr>
                                        <tr>
                                            <td style="background: var(--bs-white);">Hotel and Business Mgt.</td>
                                            <td style="background: var(--bs-white);">-</td>
                                        </tr>
                                        <tr>
                                            <td style="background: var(--bs-white);">Industrial Technology</td>
                                            <td style="background: var(--bs-white);">-</td>
                                        </tr>
                                        <tr>
                                            <td class="text-end text-bg-warning">TOTAL</td>
                                            <td class="text-bg-light">-</td>
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
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Education</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Hotel and Business Mgt.</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Industrial Technology</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td class="text-end text-bg-warning">TOTAL</td>
                                            <td>-</td>
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
                <div class="container" data-aos="zoom-out" data-aos-delay="200" id="president" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">president</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" data-aos="zoom-out" data-aos-delay="200" id="vicepres" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Vice President</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" data-aos="zoom-out" data-aos-delay="200" id="senator" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Senator</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" data-aos="zoom-out" data-aos-delay="200" id="batchrep" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Batch Representative</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" data-aos="zoom-out" data-aos-delay="200" id="gov" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Governor</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" data-aos="zoom-out" data-aos-delay="200" id="vicegov" style="margin-bottom: 10px;margin-top: 10px;">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h4 class="text-capitalize text-start" style="font-family: Muli;font-weight: bold;text-align: center;">Vice Governor</h4>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Candidate Name</h4>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <figure class="figure"><img class="img-fluid figure-img" src="../assets/img/ISAT-U-logo-shadow1.png"></figure><button class="btn btn-primary" type="button" style="text-align: center;">more info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="tally" style="margin-bottom: 12px;margin-top: 12px;margin-right: 24px;margin-left: 24px;">
            <div class="col-lg-12" data-aos="fade" id="tally-header">
                <div class="container" style="padding: 0px;">
                    <section style="padding: 12px;padding-top: 12px;margin: 24px;">
                        <div class="container">
                            <div class="pb-2 pb-lg-1">
                                <h3 class="fw-bold mb-2" style="text-align: center;">Tally of Votes</h3>
                                <p class="mb-0" style="text-align: center;">Last Update: (time)</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-3" data-aos="zoom-in" data-aos-delay="50" style="border-width: 1.4px;">
                <p class="fs-5"><strong>PRESIDENT</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-3" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>VICE PRESIDENT</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-3" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>SENATOR</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-white);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Computer Studies)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Education)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Hotel &amp; Business Mgt.)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>BATCH REPRESENTATIVE (Industrial Technology)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>GOVERNOR (Computer Studies)</strong><br></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>VICE GOVERNOR (Computer Studies)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>GOVERNOR (Education)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>VICE GOVERNOR (Education)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>GOVERNOR (Hotel &amp;</strong>&nbsp;<strong>Business Mgt.)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>VICE GOVERNOR (Hotel &amp;</strong>&nbsp;<strong>Business Mgt.)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>GOVERNOR (Industrial Technology)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;background: var(--bs-gray-500);"></td>
                                <td style="background: var(--bs-yellow);">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
                <p class="fs-5"><strong>VICE GOVERNOR (Industrial Technology)</strong></p>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <tr>
                                <th style="background: var(--bs-blue);color: var(--bs-white);">Name of Candidate</th>
                                <th style="background: var(--bs-yellow);color: var(--bs-table-color);">% of Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 1</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
                            <tr>
                                <td style="background: var(--bs-white);">Cell 3</td>
                                <td style="background: var(--bs-white);">-</td>
                            </tr>
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