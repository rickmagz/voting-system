<?php
session_start();
include '../db.php';

$student_id = $_GET['id'];
$first_name = $_SESSION['first_name'];

$get_student_info = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$student_id'") or die("Error in query: $get_student_info." . mysqli_error($cxn));

if (mysqli_num_rows($get_student_info) > 0) {
    $s = mysqli_fetch_assoc($get_student_info);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Delete S.E.B. Profile - ISATU Miagao Campus Student Republic Election</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/css/Hero-Clean-images.css" />
    <link rel="stylesheet" href="../assets/css/Login-Form-Basic-icons.css" />
</head>

<body style="
      background: url('../assets/img/pattern.png') center / auto,
        var(--bs-white);
      margin: 0 auto;
    ">
    <nav class="navbar navbar-light navbar-expand-lg sticky-top shadow-none" style="
        padding-top: 0px;
        padding-bottom: 0px;
        background: linear-gradient(
          -180deg,
          var(--bs-yellow) 39%,
          rgba(255, 255, 255, 0.5) 100%
        );
      ">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="home.php"><img width="75" height="75" src="../assets/img/ISAT-U-logo-shadow1.png" /><img width="75" height="75" src="../assets/img/sr-logo.png" /><span style="
              margin-left: 4px;
              font-family: Lato, sans-serif;
              font-weight: bold;
            ">ISATU Miagao Campus <br />Student Republic Election
                    <br />Dashboard</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto" style="color: var(--bs-black);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.php" style="font-size: 18px;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.php#candidates" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">The Candidates</a></li>
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.php#tally" style="--bs-body-color: var(--bs-navbar-brand-color);font-size: 18px;">Tally of Votes</a></li>
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
    <main style="margin: 0 auto; margin-bottom: 54px;">
        <form action="includes/deletestudent.php" method="POST" id="deletesstudprofile" enctype='multipart/form-data'>
            <hr />
            <div class="card" style="
              margin-left: 100px;
              margin-right: 100px;
            ">
                <div class="card-body">
                    <h2 style="font-family: Muli">
                        <strong>Delete S.E.B. Profile?</strong>
                    </h2>
                    <div class="row">
                        <div class="col mb-3 mt-3" id="id">
                            <span for="id">Student ID</span>
                            <input type="text" class="form-control-plaintext" id="id" value="<?php echo $s['student_id']; ?>" name="id" required />
                        </div>
                        <div class="col align-self-center" id="image">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col " id="firstname-1">
                            <span for="name">First Name</span>
                            <input type="text" class="form-control-plaintext" id="firstname" value="<?php echo $s['first_name']; ?>" name="firstname" required />
                        </div>
                        <div class="col" id="lastname-1">
                            <span for="name">Last Name</span>
                            <input type="text" class="form-control-plaintext" id="lastname" value="<?php echo $s['last_name']; ?>" name="lastname" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3 mt-3">
                            <span for="name">Council</span>
                            <input type="text" class="form-control-plaintext" id="council" value="<?php echo $s['council']; ?>" name="council" readonly />
                        </div>
                        <div class="col mb-3 mt-3">
                            <span for="name">Course</span>
                            <input type="text" class="form-control-plaintext" id="course" value="<?php echo $s['course']; ?>" name="course" readonly />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-xl-6">
                            <span for="name">Major</span>
                            <input type="text" class="form-control-plaintext" id="major" value="<?php echo $s['major']; ?>" name="major" readonly />
                        </div>
                        <div class="col-xl-3" id="year">
                            <span for="name">Year</span>
                            <input type="text" class="form-control-plaintext" id="year" value="<?php echo $s['year']; ?>" name="year" readonly />
                        </div>
                        <div class="col-xl-3" id="section">
                            <span for="name">Section</span>
                            <input type="text" class="form-control-plaintext" id="section" value="<?php echo $s['section']; ?>" name="section" readonly />

                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit" name="delete" form="deletesstudprofile">confirm delete</button>

                    <a class="btn btn-secondary" href="settings.php">Cancel</a>
                </div>
            </div>
        </form>
    </main>



    <footer style="
        background: var(--bs-primary);
        box-shadow: 0px -2px 20px var(--bs-blue);
      " data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-white); font-size: 16px">
                ©&nbsp;ISATU - Miagao Campus Student Republic Election 2023 All Rights
                Reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/new-age.js"></script>

</body>

</html>