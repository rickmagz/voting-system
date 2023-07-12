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
      <form action="register.php" method="POST" id="register" enctype='multipart/form-data'>
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
                  <label for="id">Student ID</label>
                </div>
              </div>
              <div class="col align-self-center" id="lastname">
                <span style="font-size: 16px; font-family: Muli">Student Picture</span><input class="form-control" type="file" name="image" required />
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
              <div class="col">
                <select class="form-select  mb-3 mt-3" name="council" id="council" required>
                  <option selected disabled>Select Council</option>
                  <option value="Education">Education</option>
                  <option value="BIT">B.I.T.</option>
                  <option value="HBM">H.B.M.</option>
                  <option value="ComStud">Computer Studies</option>
                </select>
              </div>
              <div class="col">
                <select class="form-select mb-3 mt-3" id="course" name="course" required>

                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6">
                <select class="form-select mb-3 mt-3" name="major" id="major" required>

                </select>
              </div>
              <div class="col-xl-3" id="year">
                <select class="form-select mb-3 mt-3" name="year" required>
                  <option selected disabled>Select Year</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="col-xl-3" id="section">
                <select class="form-select mb-3 mt-3" name="section" required>
                  <option selected disabled>Select Section</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</option>
                  <option value="G">G</option>
                  <option value="H">H</option>
                  <option value="I">I</option>
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

  $upload_folder = "uploads/";

  if (isset($_POST['register'])) {
    $student_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $council = $_POST['council'];
    $course = $_POST['course'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    $section = $_POST['section'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_id = mysqli_query($cxn, "SELECT * FROM student WHERE student_id = '$student_id'") or die("Error in query: $check_id." . mysqli_error($cxn));

    $check_username = mysqli_query($cxn, "SELECT * FROM student WHERE username ='$username'") or die("Error in query: $check_username." . mysqli_error($cxn));

    if ($check_id->num_rows == 1 && $check_username == 1) {
      echo "<script type='text/javascript'> alert('Student ID and/or Username has been registered!'); location.href = 'register.php'; </script>";
    } else {
      $image = basename($_FILES["image"]["name"]);
      $targetFileFolder = $upload_folder . $image;
      $fileType = pathinfo($targetFileFolder, PATHINFO_EXTENSION);
      $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

      $register = mysqli_query($cxn, "INSERT INTO student(student_id,username,password,first_name,last_name,council,course,major,year,section) VALUES('$student_id','$username','$password','$firstname','$lastname','$council','$course','$major','$year','$section')") or die("Error in query: $register." . mysqli_error($cxn));

      if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFileFolder)) {
          $upload = $cxn->query("INSERT INTO uploads(student_id,filename) VALUES('$student_id','$image')");
        }
      }


      echo "<script type='text/javascript'> alert('Registration Successful! Click to log in.'); location.href = 'login.php'; </script>";
    }
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
  <script>
    var council = document.getElementById("council");
    var course = document.getElementById("course");
    var major = document.getElementById("major");

    function courseOptions() {
      var councilname = council.value;

      course.innerHTML = "";

      if (councilname == "Education") {
        course.innerHTML += "<option disabled>Select Course</option>";
        course.innerHTML += "<option value='BEED'>Elementary Education</option>";
        course.innerHTML += "<option value='BSED'>Secondary Education</option>";
        course.innerHTML += "<option value='BTVTED'>Technical-Vocational Teacher Education</option>";
        course.innerHTML += "<option value='BTLED'>Technology and Livelihood Education</option>";
      } else if (councilname == "BIT") {
        course.innerHTML += "<option disabled>Select Course</option>";
        course.innerHTML += "<option value='BIT'>Bachelor in Industrial Technology</option>";
      } else if (councilname == "HBM") {
        course.innerHTML += "<option disabled>Select Course</option>";
        course.innerHTML += "<option value='HM'>Hospitality Management</option>";
        course.innerHTML += "<option value='TM'>Tourism Management</option>";
        course.innerHTML += "<option value='Entrep'>Entrepreneurship</option>";
      } else if (councilname == "ComStud") {
        course.innerHTML += "<option disabled>Select Course</option>";
        course.innerHTML += "<option value='InfoTech'>Information Technology</option>";
        course.innerHTML += "<option value='InfoSys'>Information Systems</option>";
      }
    }

    council.addEventListener("change", courseOptions);

    function majorOptions() {
      var coursename = course.value;

      major.innerHTML = "";

      if (coursename == "BSED") {
        major.innerHTML += "<option disabled>Select Major</option>";
        major.innerHTML += "<option value='English'>English</option>";
        major.innerHTML += "<option value='Filipino'>Filipino</option>";
        major.innerHTML += "<option value='Mathematics'>Mathematics</option>";
        major.innerHTML += "<option value='Science'>Science</option>";
        major.innerHTML += "<option value='Social Studies'>Social Studies</option>";
      } else if (coursename == "BTVTED") {
        major.innerHTML += "<option disabled>Select Major</option>";
        major.innerHTML += "<option value='Automotive Technology'>Automotive Technology</option>";
        major.innerHTML += "<option value='Electrical Technology'>Electrical Technology</option>";
        major.innerHTML += "<option value='Food Service Management'>Food Service Management</option>";
        major.innerHTML += "<option value='Drafting Technology'>Drafting Technology</option>";
        major.innerHTML += "<option value='Electronics Technology'>Electronics Technology</option>";
        major.innerHTML += "<option value='Garments, Fashion and Design'>Garments, Fashion and Design</option>";
      } else if (coursename == "BTLED") {
        major.innerHTML += "<option disabled>Select Major</option>";
        major.innerHTML += "<option value='Home Economics'>Home Economics</option>";
        major.innerHTML += "<option value='Industrial Arts'>Industrial Arts</option>";
      } else {
        major.innerHTML += "<option selected disabled>Select Major</option>";
        major.innerHTML += "<option value='None'>N/A</option>";
      }
    }

    course.addEventListener("change", majorOptions);
  </script>
</body>

</html>