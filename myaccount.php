<?php
session_start();
include 'db.php';

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$student_id = $_SESSION['id'];

$get_id = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$student_id'") or die("Error in query: $get_id." . mysqli_error($cxn));

if (mysqli_num_rows($get_id) > 0) {
  $i = mysqli_fetch_assoc($get_id);
  $link_id = $i['id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>My Account - ISATU Miagao Campus Student Republic Election</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/Hero-Clean-images.css" />
  <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css" />
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg py-3" style="box-shadow: 0px 0px 20px var(--bs-yellow)">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ISAT-U-logo-shadow1.png" width="50px" height="50px" /><img src="assets/img/sr-logo.png" width="50px" height="50px" /><span style="
              margin-left: 9px;
              font-family: Muli;
              color: var(--bs-blue);
              font-weight: bold;
            ">ISATU Miagao Campus <br />Student Republic Election</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcol-2">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" style="
                  background: var(--bs-blue);
                  border-radius: 10px;
                  color: var(--bs-gray-100);
                  font-weight: bold;
                " href="vote.php">VOTE NOW</a>
          </li>
          <li class="nav-item" style="padding: 8px">
            <a class="nav-link active" style="padding: 0px" href="dashboard.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="candidates.php">Candidates</a>
          </li>
          <li class="nav-item"></li>
          <li class="nav-item">
            <a class="nav-link" href="myaccount.php">My Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log out</a>
          </li>
          <li class="nav-item"></li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <div class="container" style="margin-top: 18px">
      <div class="row">
        <div class="col-xl-9 offset-xl-2 bounce animated" style="margin-bottom: -20px; margin-top: 24px">
          <h3 style="font-family: Muli">My Account</h3>
        </div>
      </div>
      <hr />
      <div class="row" data-aos="zoom-out" id="myaccount" style="margin-bottom: 30px">
        <div class="col-xl-9 offset-xl-2" style="border-radius: 10px; margin-bottom: 20px">
          <div class="card" style="border-radius: 10px">
            <div class="card-body" style="background: var(--bs-card-bg); border-radius: 10px">
              <div class="row" style="
                    background: var(--bs-card-bg);
                    padding-bottom: 0px;
                    padding-top: 10px;
                    border-radius: 10px;
                  ">

                <?php
                $get_image = mysqli_query($cxn, "SELECT * FROM uploads WHERE student_id='$student_id'") or die("Error in query: $get_image." . mysqli_error($cxn));

                if (mysqli_num_rows($get_image) > 0) {
                  $i = mysqli_fetch_assoc($get_image);
                  $image = $i['filename'];
                }
                ?>
                <div class="col-5 col-sm-4 col-md-3 col-lg-2 col-xl-2 offset-0" style="height: 98.975px; margin-bottom: 6px">
                  <figure class="figure">
                    <img class="rounded-circle img-fluid figure-img" src="uploads/<?php echo $image; ?>" width="300px" height="300px" />
                  </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-7 col-lg-10 col-xl-8" style="margin-top: 11px">
                  <h3 style="
                        font-weight: bold;
                        font-family: Muli;
                        color: var(--bs-black);
                      "> <?php echo $first_name; ?> <?php echo $last_name; ?>
                    <?php
                    $if_candidate = mysqli_query($cxn, "SELECT * FROM candidates WHERE student_id='$student_id'") or die("Error in query: $if_candidate." . mysqli_error($cxn));

                    if (mysqli_num_rows($if_candidate) == 1) {
                      $if_cand = "Candidate";
                    } else {
                      $if_cand = "Voter";
                    }
                    ?>
                    (<?php echo $if_cand; ?>)
                  </h3>
                  <span style="font-size: 21px">Student ID: <?php echo $student_id; ?> <br /></span><a class="btn btn-primary" type="button" style="
                        font-family: Muli;
                        font-size: 14px;
                        border-width: 1px;
                        margin-top: 10px;
                        font-weight: bold;
                        padding-right: 30px;
                        padding-left: 30px;
                        text-align: center;
                      " href="editprofile.php?id=<?php echo $link_id; ?>" target="_self">edit profile</a>
                </div>
              </div>
              <?php
              $get_account = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$student_id'") or die("Error in query: $get_account." . mysqli_error($cxn));

              if (mysqli_num_rows($get_account) > 0) {
                $a = mysqli_fetch_assoc($get_account);
                $id = $student_id;
                $first_name = $_SESSION['first_name'];
                $last_name = $_SESSION['last_name'];
                $council = $a['council'];
                $course = $a['course'];
                $major = $a['major'];
                $year = $a['year'];
                $section = $a['section'];
              }
              ?>
              <div class="row" style="
                    margin-top: 35px;
                    background: #eff3f8;
                    border-radius: 10px;
                    margin-right: 10px;
                    margin-left: 10px;
                    padding: 7px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                  ">
                <div class="col-xl-12" id="council">
                  <h5 style="
                        font-weight: bold;
                        font-family: Muli;
                        color: var(--bs-black);
                        padding-bottom: 0px;
                      ">
                    Council
                  </h5>
                  <span style="font-size: 21px"><?php echo $council; ?></span>
                </div>
                <div class="col-xl-12" id="course" style="padding-top: 10px; margin-top: 14px">
                  <h5 style="
                        font-weight: bold;
                        font-family: Muli;
                        color: var(--bs-black);
                      ">
                    Course
                  </h5>
                  <span style="font-size: 21px"><?php echo $course; ?></span>
                </div>
                <div class="col-xl-12" id="course" style="padding-top: 10px; margin-top: 14px">
                  <h5 style="
                        font-weight: bold;
                        font-family: Muli;
                        color: var(--bs-black);
                      ">
                    Major
                  </h5>
                  <span style="font-size: 21px"><?php echo $major; ?></span>
                </div>
                <div class="col-xl-12" id="yearsec" style="padding-top: 10px; margin-top: 14px">
                  <h5 style="
                        font-weight: bold;
                        font-family: Muli;
                        color: var(--bs-black);
                      ">
                    Year &amp; Section
                  </h5>
                  <span style="font-size: 21px"><?php echo $year; ?>-<?php echo $section; ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/new-age.js"></script>