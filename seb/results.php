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

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-none" style="padding-top: 0px;padding-bottom: 0px;background: linear-gradient(-180deg, var(--bs-yellow) 39%, rgba(255,255,255,0.5) 100%);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img width="75" height="75" src="../assets/img/ISAT-U-logo-shadow1.png"><img width="75" height="75" src="../assets/img/sr-logo.png"><span style="margin-left: 4px;font-family: Lato, sans-serif;font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election <br>Dashboard</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto" style="color: var(--bs-black);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.html" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.html#candidates" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">The Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.html#tally" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">Tally of Votes</a></li>
                    <li class="nav-item dropstart"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;" href="#">More</a>
                        <div class="dropdown-menu dropdown-menu-start" style="border-radius: 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;border-width: 1px;color: var(--bs-navbar-brand-color);"><a class="dropdown-item" style="--bs-body-color: var(--bs-navbar-brand-color);" href="election_mgt.html#tab-1">Election<br>Management</a><a class="dropdown-item" href="seb.html">About S.E.B.</a><a class="dropdown-item" href="results.html">Print Election<br>Results</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#" style="text-align: left;"><img width="30" height="30" src="../assets/img/Screenshot_2021-01-28-04-41-56-92.jpg">&nbsp;Admin</a><a class="dropdown-item" href="settings.html" style="background: var(--bs-blue);color: var(--bs-dropdown-bg);">Settings</a><a class="dropdown-item" href="./logout.php" style="background: var(--bs-red);color: var(--bs-dropdown-bg);">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin-bottom: 300px;">
        <div class="row" id="tally" style="margin-bottom: 12px;margin-top: 80px;margin-right: 24px;margin-left: 24px;">
            <div class="col-lg-12" data-aos="fade" id="tally-header">
                <div class="container" style="padding: 0px;">
                    <section style="padding: 12px;padding-top: 12px;margin: 24px;">
                        <div class="container">
                            <div class="pb-2 pb-lg-1">
                                <h3 class="fw-bold mb-2" style="text-align: center;">Unofficial Tally of Votes</h3>
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
                                <th style="background: var(--bs-white);color: var(--bs-white);">Name of Candidate</th>
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
            <div class="col-lg-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-lg-3 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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
            <div class="col-lg-6 offset-xl-0" data-aos="zoom-in" data-aos-delay="50">
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