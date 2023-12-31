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
            <form id="preview_vote" action="preview_vote.php" method="post" name="preview_vote">
                <div class="row" style="margin: 36px;padding-top: 16px;padding-bottom: 16px;border-style: solid;">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 offset-xxl-4 text-end" id="isat_logo"><img class="img-fluid" src="assets/img/ISAT-U-logo-shadow1.png" width="81" height="102" style="width: 102px;height: 102px;"></div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-2 offset-0" id="sr_logo"><img class="img-fluid" src="assets/img/sr-logo.png" width="102" height="102"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 offset-xl-0" id="ballot_heading">
                        <h3 class="text-center" style="font-family: Lato, sans-serif;margin-bottom: 0px;padding: 0px;"><strong>ISATU Miagao Campus</strong><br><strong>Student Republic Election</strong><br><strong>BALLOT PREVIEW</strong></h3>
                    </div>
                    <div class="col-xl-12" style="padding-bottom: 24px;">
                        <hr style="border-radius: 88px;border-width: 4px;border-color: var(--bs-black);">
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="pres_select" style="text-align: left;">
                        <h4 style="font-family: Muli;text-align: left;">PRESIDENT</h4>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="vicepres_select">
                        <h3 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">VICE PRESIDENT</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="senator_select">
                        <h3 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">SENATOR</h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0 offset-xl-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="batchrep_select">
                        <h3 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">BATCH REPRESENTATIVE</h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-0">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="gov_select">
                        <h3 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">GOVERNOR</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-lg-10 col-xl-10 offset-lg-1 offset-xl-1" id="vicegov_select">
                        <h3 style="font-family: Muli;text-align: left;padding-top: 25px;padding-bottom: 5px;">VICE GOVERNOR</h3>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-5 offset-lg-1 offset-xl-1">
                        <h3 style="font-family: Lato, sans-serif;"><strong>Paragraph</strong></h3>
                    </div>
                    <div class="col-lg-10 offset-lg-1" id="form_btn" style="text-align: center;"><button class="btn btn-primary" id="submit_btn" type="submit" style="margin: 10px;text-align: left;" name="submit" form="preview_vote">submit</button><a class="btn btn-secondary" role="button" id="back_btn" style="margin: 10px;" href="dashboard.html">back to home</a></div>
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
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>