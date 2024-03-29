<?php
session_start();
include '../db.php';

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$student_id = $_SESSION['student_id'];

$get_seb_id = mysqli_query($cxn, "SELECT * FROM seb WHERE student_id='$student_id'") or die("Error in query: $get_seb_id." . mysqli_error($cxn));

if (mysqli_num_rows($get_seb_id) > 0) {
  $i = mysqli_fetch_assoc($get_seb_id);
  $img = $i['image'];
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>SEB Settings - ISATU Miagao Campus Student Republic Election</title>
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
  <nav class="navbar navbar-light navbar-expand-lg shadow-none" style="
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
  <main>
    <div class="row" style="margin-bottom: 50vh">
      <div class="col-sm-12 col-md-8 col-lg-12 col-xl-10 offset-md-0 offset-lg-0 offset-xl-1 align-self-center">
        <h2 style="font-family: Lato, sans-serif; font-weight: bold">
          System Global Settings<br />
        </h2>
      </div>
      <div class="col-xl-10 offset-xl-1">
        <div>
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item border rounded" role="presentation">
              <a class="nav-link active" role="tab" data-bs-toggle="tab" href="#usersettings">My Profile</a>
            </li>
            <li class="nav-item border rounded" role="presentation">
              <a class="nav-link" role="tab" data-bs-toggle="tab" href="#systemsettings">Election System Users</a>
            </li>
            <li class="nav-item border rounded" role="presentation">
              <a class="nav-link" role="tab" data-bs-toggle="tab" href="#studentmngt">Student Management</a>
            </li>
            <li class="nav-item border rounded" role="presentation">
              <a class="nav-link" role="tab" data-bs-toggle="tab" href="#electionctrl">Election Control</a>
            </li>
          </ul>
          <div class="tab-content" style="
                border-top-left-radius: 0px;
                border-bottom-right-radius: 5px;
                border-bottom-left-radius: 5px;
                background: var(--bs-white);
              ">
            <!-- user profile -->
            <div class="tab-pane fade active show" role="tabpanel" id="usersettings" style="
                  border-top-left-radius: 0px;
                  border-bottom-right-radius: 5px;
                  border-bottom-left-radius: 5px;
                  padding: 12px;
                  border-top-right-radius: 5px;
                  border: 1px solid var(--bs-gray-300);
                  border-top-width: 0px;
                  border-top-style: solid;
                ">
              <div class="card" style="border-radius: 10px">
                <div class="card-body" style="background: var(--bs-card-bg); border-radius: 10px">
                  <div class="row" style="
                        background: var(--bs-card-bg);
                        padding-bottom: 0px;
                        padding-top: 10px;
                        border-radius: 10px;
                      ">
                    <div class="col-5 col-sm-4 col-md-3 col-lg-2 col-xl-2 offset-0">
                      <figure class="figure">
                        <img class="rounded-circle img-fluid figure-img" src="../uploads/<?php echo $img; ?>" width="300px" height="300px" alt="<?php echo $img; ?>" />
                      </figure>
                    </div>
                    <div class="col-12 col-sm-6 col-md-7 col-lg-10 col-xl-8" style="margin-top: 11px">
                      <h3 style="
                            font-weight: bold;
                            font-family: Muli;
                            color: var(--bs-black);
                          ">
                        <?php echo $first_name; ?> <?php echo $last_name; ?>
                      </h3>
                      <span style="font-size: 21px"><?php echo $student_id; ?><br /></span> <a class="btn btn-primary" type="button" style="font-family: Muli; font-size: 14px; border-width: 1px; margin-top: 10px; font-weight: bold; padding-right: 30px; padding-left: 30px; text-align: center;" href="editsebprofile.php?id=<?php echo $student_id; ?>" target="_self">edit profile</a>
                    </div>
                  </div>
                  <div class="row" style="
                        
                        background: #eff3f8;
                        border-radius: 10px;
                        margin-right: 10px;
                        margin-left: 10px;
                        padding: 7px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                      ">
                    <div class="col-xl-12" id="studentname">
                      <h5 style="
                            font-weight: bold;
                            font-family: Muli;
                            color: var(--bs-black);
                          ">
                        Student Name
                      </h5>
                      <span style="font-size: 21px"><?php echo $first_name; ?> <?php echo $last_name; ?></span>
                    </div>
                    <div class="col-xl-12" id="council" style="padding-top: 10px; margin-top: 14px">
                      <h5 style="
                            font-weight: bold;
                            font-family: Muli;
                            color: var(--bs-black);
                            padding-bottom: 0px;
                          ">
                        Council
                      </h5>
                      <span style="font-size: 21px"><?php echo $i['council']; ?></span>
                    </div>
                    <div class="col-xl-12" id="course" style="padding-top: 10px; margin-top: 14px">
                      <h5 style="
                            font-weight: bold;
                            font-family: Muli;
                            color: var(--bs-black);
                          ">
                        Course
                      </h5>
                      <span style="font-size: 21px"><?php echo $i['course']; ?></span>
                    </div>
                    <div class="col-xl-12" id="yearsec" style="padding-top: 10px; margin-top: 14px">
                      <h5 style="
                            font-weight: bold;
                            font-family: Muli;
                            color: var(--bs-black);
                          ">
                        Year &amp; Section
                      </h5>
                      <span style="font-size: 21px"><?php echo $i['year']; ?>-<?php echo $i['section']; ?></span>
                    </div>
                    <div class="col-xl-12" id="position" style="padding-top: 10px; margin-top: 14px">
                      <h5 style="
                            font-weight: bold;
                            font-family: Muli;
                            color: var(--bs-black);
                          ">
                        SEB Position
                      </h5>
                      <span style="font-size: 21px"><?php echo $i['position']; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- system users -->
            <div class="tab-pane fade" role="tabpanel" id="systemsettings" style="
                  border-top-left-radius: 0px;
                  border-bottom-right-radius: 5px;
                  border-bottom-left-radius: 5px;
                  border: 1px solid var(--bs-gray-300);
                  border-top-width: 0px;
                  padding: 12px;
                ">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-12 text-start">
                      <a class="btn btn-primary btn-sm" type="button" href="addsebaccount.php" target="_self">
                        add new system user
                      </a>
                    </div>
                    <div class="col-xl-12" style="margin-top: 10px">
                      <div class="table-responsive-lg">
                        <table class="table table-hover table-sm table-bordered">
                          <thead>
                            <tr>
                              <th>Student ID</th>
                              <th>Student Name</th>
                              <th>Council</th>
                              <th>SEB Position</th>
                              <th>Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $g = 0;
                            $get_seb_info = mysqli_query($cxn, "SELECT * FROM seb") or die("Error in query: $get_seb_info." . mysqli_error($cxn));

                            if (mysqli_num_rows($get_seb_info) > 0) {
                              while ($s = mysqli_fetch_assoc($get_seb_info)) {

                                $g++;

                            ?>
                                <tr>
                                  <td><?php echo $s['student_id']; ?><br /></td>
                                  <td><?php echo $s['first_name']; ?> <?php echo $s['last_name']; ?></td>
                                  <td><?php echo $s['council']; ?></td>
                                  <td><?php echo $s['position']; ?></td>
                                  <td style="
                                    border-right-color: var(--bs-card-cap-bg);
                                  ">
                                    <a class="btn btn-primary btn-sm" type="button" href="editsebprofile.php?id=<?php echo $s['student_id']; ?>" target="_self">
                                      edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" type="button" href="deletesebaccount.php?id=<?php echo $s['student_id']; ?>" target="_self">
                                      delete
                                    </a>
                                  </td>

                                </tr>
                            <?php
                              }
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- student management-->
            <div class="tab-pane fade" role="tabpanel" id="studentmngt" style="
                  border-top-left-radius: 0px;
                  border-bottom-right-radius: 5px;
                  border-bottom-left-radius: 5px;
                  border: 1px solid var(--bs-gray-300);
                  border-top-width: 0px;
                  padding: 12px;
                ">
              <div class="card">
                <div class="card-body">
                  <!--filters -->
                  <div class="col" id="filters">
                    <span class="fs-6 fw-bold text-dark">
                      Filter by Council
                    </span>
                    <select class="border rounded border-1 border-secondary" style="padding-right: 0px;width: 175px;" name="fetchval" id="fetchval">
                      <option value="Default" selected>Default</option>
                      <option value="Education">Education</option>
                      <option value="BIT">BIT</option>
                      <option value="Computer Studies">Computer Studies</option>
                      <option value="HBM">HBM</option>
                    </select>
                  </div>




                  <div class="col-xl-12" style="margin-top: 10px">
                    <div class="table-responsive-lg">
                      <table class="table table-hover table-sm table-bordered">
                        <thead>
                          <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Council</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $g = 0;
                          $get_student_info = mysqli_query($cxn, "SELECT * FROM student") or die("Error in query: $get_student_info." . mysqli_error($cxn));

                          if (mysqli_num_rows($get_student_info) > 0) {
                            while ($st = mysqli_fetch_assoc($get_student_info)) {

                              $g++;

                          ?>
                              <tr>
                                <td><?php echo $st['student_id']; ?><br /></td>
                                <td><?php echo $st['first_name']; ?> <?php echo $st['last_name']; ?></td>
                                <td><?php echo $st['council']; ?></td>
                                <td><?php echo $st['username']; ?></td>
                                <td><?php echo $st['password']; ?></td>
                                <td style="
                                    border-right-color: var(--bs-card-cap-bg);
                                  ">
                                  <a class="btn btn-danger btn-sm" type="button" href="./deletestudentprofile.php?id=<?php echo $st['student_id']; ?>" target="_self">
                                    delete
                                  </a>
                                </td>

                              </tr>
                          <?php
                            }
                          }

                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- election control -->
            <div class="tab-pane fade" role="tabpanel" id="electionctrl" style="
                  border-top-left-radius: 0px;
                  border-bottom-right-radius: 5px;
                  border-bottom-left-radius: 5px;
                  border: 1px solid var(--bs-gray-300);
                  border-top-width: 0px;
                  padding: 12px;
                ">
              <?php
              $get_regStat = mysqli_query($cxn, "SELECT * FROM election WHERE status_name='REGISTRATION' AND current_status='ENABLED'") or die("Error in query: $get_regStat." . mysqli_error($cxn));

              $get_logStat = mysqli_query($cxn, "SELECT * FROM election WHERE status_name='LOGIN' AND current_status='ENABLED'") or die("Error in query: $get_logStat." . mysqli_error($cxn));


              ?>
              <div class="card">
                <div class="card-body">
                  <div class="col-xl-12" style="margin-top: 10px">
                    <h3 style="font-family: Lato, sans-serif; font-weight: bold">
                      Election Control <br />
                      </h2>
                      <table class="table" style="max-width:75vh; margin-left: 50px;">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Enable/Disable Registration</th>
                            <td>

                              <?php
                              if (mysqli_num_rows($get_regStat) == 1) {
                                echo '<a class="btn btn-primary btn-sm" href="./includes/regEnabled.php">ENABLED</a>';
                              } else {
                                echo '<a class="btn btn-danger btn-sm" href="./includes/regDisabled.php">DISABLED</a>';
                              }

                              ?>



                            </td>

                          </tr>
                          <tr>
                            <th scope="row">Enable/Disable Login</th>
                            <td>


                              <?php
                              if (mysqli_num_rows($get_logStat) == 1) {
                                echo '<a class="btn btn-primary btn-sm" href="./includes/logEnabled.php">ENABLED</a>';
                              } else {
                                echo '<a class="btn btn-danger btn-sm" href="./includes/logDisabled.php">DISABLED</a>';
                              }

                              ?>



                            </td>

                          </tr>

                        </tbody>
                      </table>
                  </div>
                </div>
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
      ">
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
  <script type="text/javascript">
    $(document).ready(function() {
      $("#fetchval").on('change', function() {
        var value = $(this).val();

        $.ajax({
          url: "fetchusers.php",
          type: "POST",
          data: 'request=' + value,
          beforeSend: function() {
            $(".table").html(`<span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="206px" height="206px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#1d3f72" stroke-dasharray="50.26548245743669 50.26548245743669" fill="none" stroke-linecap="round">
                        <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1.8181818181818181s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
                        </circle>
                        </svg>
                        </span>`);
          },
          success: function(data) {
            $(".table").html(data);
          }
        });
      });
    });
  </script>
</body>

</html>