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
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.html" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.html#candidates" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">The Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="#tally" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">Tally of Votes</a></li>
                    <li class="nav-item dropstart"><a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;" href="#">More</a>
                        <div class="dropdown-menu dropdown-menu-start" style="border-radius: 0px;border-bottom-right-radius: 6px;border-bottom-left-radius: 6px;border-width: 1px;color: var(--bs-navbar-brand-color);"><a class="dropdown-item" style="--bs-body-color: var(--bs-navbar-brand-color);" href="election_mgt.html">Election<br>Management</a><a class="dropdown-item" href="seb.html">About S.E.B.</a><a class="dropdown-item" href="results.html">Print Election<br>Results</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#" style="text-align: center;"><img width="30" height="30" src="../assets/img/Screenshot_2021-01-28-04-41-56-92.jpg">&nbsp;Admin</a><a class="dropdown-item" href="settings.html" style="background: var(--bs-blue);color: var(--bs-dropdown-bg);">Settings</a><a class="dropdown-item" href="logout.php" style="background: var(--bs-red);color: var(--bs-dropdown-bg);">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main style="margin: 25px;margin-bottom: 119px;">
        <div class="row" style="margin-top: 128px;margin-right: 24px;margin-left: 24px;">
            <div class="col-xl-10 offset-xl-1" style="margin-bottom: 226px;">
                <h2 style="font-family: Muli;">Election Management</h2>
                <hr>
                <div>
                    <ul class="nav nav-tabs nav-justified text-start" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Add Candidate</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Modify/Delete Candidate Info</a></li>
                    </ul>
                    <div class="tab-content" style="border-top-left-radius: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
                        <div class="tab-pane fade show active" role="tabpanel" id="tab-1" style="border-top-left-radius: 0px;border: 1px solid var(--bs-gray-300);border-top-width: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
                            <form id="addcandidate" action="election_mgt.php" method="post" name="addcandidate" style="border-top-width: 1px;border-top-style: none;">
                                <div class="row">
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-md-1 offset-lg-1 offset-xl-1" style="padding-bottom: 12px;padding-top: 12px;"><label class="form-label" style="margin: 0px;">Select Position</label><select class="form-select form-select-sm" name="pos" autofocus="" required="" style="margin-left: 0px;">
                                            <optgroup label="Select Position">
                                                <option value="prsident">President</option>
                                                <option value="vicepres">Vice President</option>
                                                <option value="senator">Senator</option>
                                                <option value="batchrep">Batch Representative</option>
                                                <option value="gov">Governor</option>
                                                <option value="vicegov">Vice Governor</option>
                                            </optgroup>
                                        </select></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-xl-0" style="padding-bottom: 12px;padding-top: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Upload Photo</label><input class="form-control form-control-sm" type="file" name="img" required=""></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Student ID</label><input class="form-control form-control-sm" type="text" name="id" placeholder="Enter Student ID" required=""></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-xl-0" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Council</label><select class="form-select form-select-sm" name="council" autofocus="" required="" style="margin-left: 0px;">
                                            <optgroup label="Select Council">
                                                <option value="comstud">Computer Studies</option>
                                                <option value="educ">Education</option>
                                                <option value="hbm">Hotel &amp; Business Mgt.</option>
                                                <option value="bit">Industrial Technology</option>
                                            </optgroup>
                                        </select></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">First Name</label><input class="form-control form-control-sm" type="text" name="first_name" placeholder="Enter First Name" required=""></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-xl-0" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Last Name</label><input class="form-control form-control-sm" type="text" name="last_name" placeholder="Enter Last Name" required=""></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Contact Number</label><input class="form-control form-control-sm" type="text" name="contactno" placeholder="Enter Contact No." required=""></div>
                                    <div class="col-md-5 col-lg-5 col-xl-5 offset-xl-0" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Email Address</label><input class="form-control form-control-sm" type="text" name="email" placeholder="Enter E-mail Address" required="" inputmode="email"></div>
                                    <div class="col-md-10 col-lg-10 col-xl-5 offset-md-1 offset-lg-1 offset-xl-1 align-self-center" style="margin-bottom: 12px;"><button class="btn btn-primary btn-sm" id="addcandidate" type="submit" form="addcandidate" name="addcandidate" style="border-radius: 10px;">ADD CANDIDATE</button><button class="btn btn-secondary btn-sm" type="reset" style="border-radius: 10px;">cLEAR</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-2" style="border-top-left-radius: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border: 1px solid var(--bs-gray-300);border-top-width: 0px;padding: 12px;">
                            <div class="table-responsive-lg text-center d-xl-flex">
                                <table class="table table-hover table-bordered">
                                    <thead style="background: var(--bs-blue);color: var(--bs-white);">
                                        <tr>
                                            <th>Candidate Name</th>
                                            <th class="text-center">Running Position</th>
                                            <th class="text-center">Council</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Smith</td>
                                            <td>President</td>
                                            <td>Computer Studies</td>
                                            <td class="text-center" style="padding: 3px;"><button class="btn btn-primary btn-sm" type="button" data-bs-target="#editmodal" data-bs-toggle="modal">edit</button><button class="btn btn-danger btn-sm" type="button" data-bs-target="#deletemodal" data-bs-toggle="modal">delete</button></td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="editmodal" style="border-radius: 5px;">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header text-white" style="background: var(--bs-blue);border-radius: 7px;height: 50px;border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;">
                    <h5 class="modal-title" style="font-family: Lato, sans-serif;">Edit Candidate Information</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editform" action="election_mgt.php" method="post" name="editform" style="border-top-width: 1px;border-top-style: none;">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-bottom: 12px;padding-top: 12px;"><label class="form-label" style="margin: 0px;">Select Position</label><select class="form-select form-select-sm" name="pos" autofocus="" required="" style="margin-left: 0px;">
                                    <optgroup label="Select Position">
                                        <option value="prsident">President</option>
                                        <option value="vicepres">Vice President</option>
                                        <option value="senator">Senator</option>
                                        <option value="batchrep">Batch Representative</option>
                                        <option value="gov">Governor</option>
                                        <option value="vicegov">Vice Governor</option>
                                    </optgroup>
                                </select></div>
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Student ID</label><input class="form-control form-control-sm" type="text" name="id" placeholder="Enter Student ID" required=""></div>
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Council</label><select class="form-select form-select-sm" name="council" autofocus="" required="" style="margin-left: 0px;">
                                    <optgroup label="Select Council">
                                        <option value="comstud">Computer Studies</option>
                                        <option value="educ">Education</option>
                                        <option value="hbm">Hotel &amp; Business Mgt.</option>
                                        <option value="bit">Industrial Technology</option>
                                    </optgroup>
                                </select></div>
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">First Name</label><input class="form-control form-control-sm" type="text" name="first_name" placeholder="Enter First Name" required=""></div>
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Last Name</label><input class="form-control form-control-sm" type="text" name="last_name" placeholder="Enter Last Name" required=""></div>
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Contact Number</label><input class="form-control form-control-sm" type="text" name="contactno" placeholder="Enter Contact No." required=""></div>
                            <div class="col-md-6 col-lg-6 col-xl-8 offset-md-1 offset-lg-1 offset-xl-1" style="padding-top: 12px;padding-bottom: 12px;"><label class="form-label" style="margin: 0px;padding: 0px;">Email Address</label><input class="form-control form-control-sm" type="text" name="email" placeholder="Enter E-mail Address" required="" inputmode="email"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal" style="border-radius: 20px;">cancel</button><button class="btn btn-primary" type="button" style="border-radius: 20px;" form="editform">Save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="deletemodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: var(--bs-red);color: var(--bs-modal-bg);height: 50px;">
                    <h5 class="modal-title">Delete Candidate?</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Candidate Name: </strong>John Smith<br><strong>Running Position:</strong>&nbsp;President<br><strong>Council: </strong>Computer Studies</p>
                </div>
                <div class="modal-footer"><button class="btn btn-danger" type="button" data-bs-dismiss="modal">cancel</button><button class="btn btn-primary" type="button">ok</button></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/new-age.js"></script>
</body>

</html>