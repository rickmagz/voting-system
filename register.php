<?php
session_start();
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Registration - ISATU Miagao Campus Student Republic Election</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/Hero-Clean-images.css" />
  <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css" />
</head>

<body>
  <header class="masthead">
    <div class="container" id="header" style="
          background: #ffffff;
          color: var(--bs-blue);
          padding-top: 5px;
          padding-bottom: 5px;
          border-radius: 20px;
        ">
      <div class="row">
        <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-2" style="text-align: right; margin: 0px">
          <img src="assets/img/ISAT-U-logo-shadow1.png" style="width: 100px; height: 100px; padding-top: 5px" />
        </div>
        <div class="col" style="text-align: left; margin: 0px">
          <span style="font-size: 24px">ISATU - Miagao Campus<br />Student Republic Election<br /></span><span style="font-size: 24px; font-weight: bold">VOTERS REGISTRATION<br /></span>
        </div>
      </div>
    </div>
    <div class="container">
      <form action="register.php" method="POST" id="register">
        <hr />
        <div class="card" style="
              box-shadow: 0px 0px 20px var(--bs-gray);
              margin-left: 65px;
              margin-right: 65px;
            ">
          <div class="card-body" style="color: var(--bs-black)">
            <h2 style="font-family: Muli">
              <strong>Student Information</strong>
            </h2>
            <div class="row">
              <div class="col" id="firstname">
                <div class="form-floating mb-3 mt-3">
                  <input type="text" class="form-control" id="id" placeholder="Enter Student ID" name="id" required />
                  <label for="email">Student ID</label>
                </div>
              </div>
              <div class="col align-self-center" id="lastname">
                <span style="font-size: 16px; font-family: Muli">Student Picture</span><input class="form-control" type="file" name="image" />
              </div>
            </div>
            <div class="row">
              <div class="col" id="firstname-1">
                <div class="form-floating mb-3 mt-3">
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" required />
                  <label for="name">First Name</label>
                </div>
              </div>
              <div class="col" id="lastname-1">
                <div class="form-floating mb-3 mt-3">
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" required />
                  <label for="name">Last Name</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col" id="council">
                <select class="form-select form-select-lg mb-3 mt-3" name="council" required>
                  <option selected>Select Council</option>
                  <option value="Education">Education</option>
                  <option value="BIT">B.I.T.</option>
                  <option value="HBM">H.B.M.</option>
                  <option value="ComStud">Computer Studies</option>
                </select>
              </div>
              <div class="col" id="course">
                <select class="form-select form-select-lg mb-3 mt-3" name="course" required>
                  <option selected>Select Course</option>
                  <option value="Education">Education</option>
                  <option value="BIT">B.I.T.</option>
                  <option value="HBM">H.B.M.</option>
                  <option value="ComStud">Computer Studies</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6" id="major">
                <select class="form-select form-select-lg mb-3 mt-3" name="major" required>
                  <option selected>Select Major</option>
                  <option value="Education">Education</option>
                  <option value="BIT">B.I.T.</option>
                  <option value="HBM">H.B.M.</option>
                  <option value="ComStud">Computer Studies</option>
                </select>
              </div>
              <div class="col-xl-3" id="year">
                <select class="form-select form-select-lg mb-3 mt-3" name="year" required>
                  <option selected>Select Year</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-xl-3" id="section">
                <select class="form-select form-select-lg mb-3 mt-3" name="section" required>
                  <option selected>Select Section</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
            <hr />
            <h2><strong>Login Credentials</strong></h2>
            <div class="row">
              <div class="col-xl-4" id="username">
                <div class="form-floating mb-3 mt-3">
                  <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required />
                  <label for="email">Username</label>
                </div>
              </div>
              <div class="col-xl-4" id="password">
                <div class="form-floating mb-3 mt-3">
                  <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required />
                  <label for="email">Password</label>
                </div>
              </div>

            </div>
            <button class="btn btn-primary" type="submit" name="register" form="register">submit</button>
            <button class="btn btn-secondary" type="reset">Clear</button>
          </div>
        </div>
      </form>
    </div>
  </header>
  <?php
  if (isset($_POST['register'])) {
    $student_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $council = $_POST['council'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $username = $_POST['username'];
    $password = $_POST['password'];


  }
  ?>
  <footer style="background: var(--bs-body-bg); margin-top: 30px;" data-bs-spy="scroll">
    <div class="container">
      <p style="color: var(--bs-black); font-size: 16px">
        ©&nbsp;ISATU - Miagao Campus Student Republic Election 2023. All
        Rights Reserved.
      </p>
      <ul class="list-inline">
        <li class="list-inline-item">
          <a href="seb/index.php" style="color: var(--bs-blue); text-decoration: none">Admin</a>
        </li>
      </ul>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bs-init.js"></script>
  <script src="assets/js/new-age.js"></script>
</body>

</html>