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
                    <li class="nav-item"><a class="nav-link" href="myaccount.html">My Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.html">Log out</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            <form data-aos="zoom-out" id="vote" action="preview_vote.php" method="post">
                <div class="row" style="margin: 36px;padding-top: 16px;padding-bottom: 16px;border-style: solid;">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-4 text-end"><img class="img-fluid" src="assets/img/ISAT-U-logo-shadow1.png" width="81" height="102" style="width: 102px;height: 102px;"></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-2 offset-0"><img class="img-fluid" src="assets/img/sr-logo.png" width="102" height="102"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 offset-xl-0">
                        <h4 class="text-center" style="font-family: Lato, sans-serif;margin-bottom: 0px;padding: 0px;"><strong>ISATU Miagao Campus</strong><br><strong>Student Republic Election</strong><br><strong>OFFICIAL BALLOT</strong></h4>
                    </div>
                    <div class="col-xl-12" style="padding-bottom: 24px;">
                        <hr style="border-radius: 88px;border-width: 4px;border-color: var(--bs-black);">
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="pres_select" style="text-align: left;">
                        <h6 style="font-family: Muli;text-align: left;">PRESIDENT (SELECT 1)</h6>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="radio" id="pres-1" name="pres"><label class="form-check-label" for="pres-1">Candidate Name</label></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="radio" id="pres" name="pres"><label class="form-check-label" for="formCheck-2">Candidate Name<br></label></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="radio" id="pres" name="pres"><label class="form-check-label" for="formCheck-3">Candidate Name</label></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="radio" id="pres" name="pres"><label class="form-check-label" for="formCheck-4">Candidate Name</label></div>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="vicepres_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">VICE PRESIDENT (SELECT 1)</h6>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="radio" id="vice" name="vicepres"><label class="form-check-label" for="formCheck-5">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="radio" id="vice" name="vicepres"><label class="form-check-label" for="formCheck-6">Candidate Name<br></label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="radio" id="vice" name="vicepres"><label class="form-check-label" for="formCheck-7">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="radio" id="vice" name="vicepres"><label class="form-check-label" for="formCheck-8">Candidate Name</label></div>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="senator_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">SENATOR (SELECT 12)</h6>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen" name="sen"><label class="form-check-label" for="formCheck-9">Candidate Name<br></label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen" name="sen"><label class="form-check-label" for="formCheck-10">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen" name="sen"><label class="form-check-label" for="formCheck-11">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-1 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen" name="sen"><label class="form-check-label" for="formCheck-12">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-5" name="sen"><label class="form-check-label" for="sen-5">Candidate Name<br></label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-6" name="sen"><label class="form-check-label" for="sen-6">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-1 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-7" name="sen"><label class="form-check-label" for="sen-7">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-8" name="sen"><label class="form-check-label" for="sen-8">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-1" name="sen"><label class="form-check-label" for="sen-1">Candidate Name<br></label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-1 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-2" name="sen"><label class="form-check-label" for="sen-2">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-3" name="sen"><label class="form-check-label" for="sen-3">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="sen-4" name="sen"><label class="form-check-label" for="sen-4">Candidate Name</label></div>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="batchrep_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">BATCH REPRESENTATIVE (SELECT 2)</h6>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="batchrep" name="batchrep"><label class="form-check-label" for="sen-9">Candidate Name<br></label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="batchrep" name="batchrep"><label class="form-check-label" for="sen-10">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-0">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="batchrep" name="batchrep"><label class="form-check-label" for="sen-11">Candidate Name</label></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="batchrep" name="batchrep"><label class="form-check-label" for="sen-12">Candidate Name</label></div>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="gov_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">GOVERNOR (SELECT 1)</h6>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="radio" id="gov" name="gov"><label class="form-check-label" for="formCheck-1">Candidate Name</label></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="radio" id="gov" name="gov"><label class="form-check-label" for="gov-1">Candidate Name</label></div>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="vicegov_select">
                        <h6 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">VICE GOVERNOR (SELECT 1)</h6>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-1">
                        <div class="form-check"><input class="form-check-input" type="radio" id="vicegov" name="vicegov"><label class="form-check-label" for="gov-1">Candidate Name</label></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 offset-lg-1 offset-xl-0">
                        <div class="form-check"><input class="form-check-input" type="radio" id="vicegov" name="vicegov"><label class="form-check-label" for="gov-2">Candidate Name</label></div>
                    </div>
                    <div class="col-lg-10 offset-lg-1" id="form_btn" style="text-align: center;"><button class="btn btn-primary" id="submit_btn" type="submit" style="margin: 10px;text-align: left;" name="submit" form="vote">submit</button><a class="btn btn-secondary" role="button" id="back_btn" style="margin: 10px;" href="dashboard.html">back to home</a></div>
                </div>
            </form>
        </div>
    </main>
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