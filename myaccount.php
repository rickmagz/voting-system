<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ISATU Voting System</title>
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
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ISAT-U-logo-shadow1.png" width="50px" height="50px"><img src="assets/img/sr-logo.png" width="50px" height="50px"><span style="margin-left: 9px;font-family: Muli;color: var(--bs-blue);font-weight: bold;">ISATU Miagao Campus<br>Student Republic Election</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" style="background: var(--bs-blue);border-radius: 10px;color: var(--bs-gray-100);font-weight: bold;" href="vote.html">VOTE NOW</a></li>
                    <li class="nav-item" style="padding: 8px;"><a class="nav-link" style="padding: 0px;" href="dashboard.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="candidates.html">Candidates</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="myaccount.html">My Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.html">Log out</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container" style="margin-top: 18px;">
            <div class="row">
                <div class="col-xl-9 offset-xl-2 bounce animated" style="margin-bottom: -20px;margin-top: 24px;">
                    <h3 style="font-family: Muli;">My Account</h3>
                </div>
            </div>
            <hr>
            <div class="row" data-aos="zoom-out" id="myaccount" style="margin-bottom: 30px;">
                <div class="col-xl-9 offset-xl-2" style="border-radius: 10px;margin-bottom: 20px;">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-body" style="background: var(--bs-card-bg);border-radius: 10px;">
                            <div class="row" style="background: var(--bs-card-bg);padding-bottom: 0px;padding-top: 10px;border-radius: 10px;">
                                <div class="col-5 col-sm-4 col-md-3 col-lg-2 col-xl-2 offset-0" style="height: 98.975px;margin-bottom: 6px;">
                                    <figure class="figure"><img class="rounded-circle img-fluid figure-img" src="assets/img/Screenshot_2021-01-28-04-41-56-92.jpg" width="300px" height="300px"></figure>
                                </div>
                                <div class="col-12 col-sm-6 col-md-7 col-lg-10 col-xl-8" style="margin-top: 11px;">
                                    <h3 style="font-weight: bold;font-family: Muli;color: var(--bs-black);">John Smith (Voter)</h3><span style="font-size: 21px;">2018-1233456-M<br></span><button class="btn btn-primary" type="button" style="font-family: Muli;font-size: 14px;border-width: 1px;margin-top: 10px;font-weight: bold;padding-right: 30px;padding-left: 30px;text-align: center;" data-bs-target="#editprofile" data-bs-toggle="modal">edit profile</button>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 35px;background: #eff3f8;border-radius: 10px;margin-right: 10px;margin-left: 10px;padding: 7px;padding-top: 10px;padding-bottom: 10px;">
                                <div class="col-xl-12" id="studentname">
                                    <h5 style="font-weight: bold;font-family: Muli;color: var(--bs-black);">Student Name</h5><span style="font-size: 21px;">John Smith</span>
                                </div>
                                <div class="col-xl-12" id="council" style="padding-top: 10px;margin-top: 14px;">
                                    <h5 style="font-weight: bold;font-family: Muli;color: var(--bs-black);padding-bottom: 0px;">Council</h5><span style="font-size: 21px;">Computer Studies</span>
                                </div>
                                <div class="col-xl-12" id="course" style="padding-top: 10px;margin-top: 14px;">
                                    <h5 style="font-weight: bold;font-family: Muli;color: var(--bs-black);">Course</h5><span style="font-size: 21px;">Information Technology</span>
                                </div>
                                <div class="col-xl-12" id="yearsec" style="padding-top: 10px;margin-top: 14px;">
                                    <h5 style="font-weight: bold;font-family: Muli;color: var(--bs-black);">Year &amp; Section</h5><span style="font-size: 21px;">4-A</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="background: var(--bs-primary);box-shadow: 0px -2px 20px var(--bs-blue);" data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-white);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023 All Rights Reserved.</p>
        </div>
    </footer>
    <div class="modal fade" role="dialog" tabindex="-1" id="editprofile">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="font-family: Muli;font-weight: bold;">Edit Profile</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Student Picture</p>
                            </div>
                            <div class="col-xl-6"><input class="border rounded shadow-sm" type="file" autofocus="" required="" style="width: 289.2px;height: 32px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Student ID</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="text" autofocus="" style="width: 289.2px;height: 32px;" name="id"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">First Name</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="text" autofocus="" style="width: 289.2px;height: 32px;" name="firstname"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Last Name</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="text" autofocus="" style="width: 289.2px;height: 32px;" name="lastname"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Council</p>
                            </div>
                            <div class="col-xl-9"><select class="border rounded shadow-sm" name="council" style="font-size: 20px;">
                                    <optgroup label="Select Council">
                                        <option value="EDU" selected="">Education</option>
                                        <option value="BIT">B.I.T.</option>
                                        <option value="HBM">HBM</option>
                                        <option value="COMSTUD">Computer Studies</option>
                                    </optgroup>
                                </select></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Course</p>
                            </div>
                            <div class="col-xl-9"><select class="border rounded shadow-sm" name="course" style="font-size: 20px;">
                                    <optgroup label="Select Council">
                                        <option value="EDU" selected="">Education</option>
                                        <option value="BIT">B.I.T.</option>
                                        <option value="HBM">HBM</option>
                                        <option value="COMSTUD">Computer Studies</option>
                                    </optgroup>
                                </select></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Major (if any)</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="text" autofocus="" style="width: 289.2px;height: 32px;" name="major"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Year</p>
                            </div>
                            <div class="col-xl-9"><select class="border rounded shadow-sm" name="year" style="font-size: 20px;">
                                    <optgroup label="Select Council">
                                        <option value="1" selected="">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                    </optgroup>
                                </select></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Section</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="text" autofocus="" style="width: 289.2px;height: 32px;" name="section"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Username</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="text" autofocus="" style="width: 289.2px;height: 32px;" name="username"></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <p class="lead">Password</p>
                            </div>
                            <div class="col-xl-9"><input class="border rounded shadow-sm" type="password" autofocus="" style="width: 289.2px;height: 32px;" name="password"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button">Save</button><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">cancel</button></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>