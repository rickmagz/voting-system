<?php
session_start();
include 'db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Add S.E.B. Account - ISATU Miagao Campus Student Republic Election</title>
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
        <form action="addsebaccount.php" method="POST" id="addseb" enctype='multipart/form-data'>
            <hr />
            <div class="card" style="
              margin-left: 100px;
              margin-right: 100px;
            ">
                <div class="card-body">
                    <h2 style="font-family: Muli">
                        <strong>Add S.E.B. Dashboard User</strong>
                    </h2>
                    <div class="row">
                        <div class="col mb-3 mt-3" id="id">
                            <span for="id">S.E.B. Position</span>
                            <select class="form-select  mb-3 mt-3" name="position" id="position" autofocus required>
                                <option selected disabled>Select Position</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Representative">Representative</option>

                            </select>
                        </div>
                        <div class="col align-self-center" id="lastname">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3 mt-3" id="id">
                            <span for="id">Student ID</span>
                            <input type="text" class="form-control" id="studentid" name="studentid" required />
                        </div>
                        <div class="col align-self-center" id="lastname">
                            <span style="font-size: 16px; font-family: Muli">Student Picture</span><input class="form-control" type="file" name="image" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col " id="firstname-1">
                            <span for="name">First Name</span>
                            <input type="text" class="form-control" id="firstname" name="firstname" required />
                        </div>
                        <div class="col" id="lastname-1">
                            <span for="name">Last Name</span>
                            <input type="text" class="form-control" id="lastname" name="lastname" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <select class="form-select  mb-3 mt-3" name="council" id="council" required>
                                <option selected disabled>Select Council</option>
                                <option value="Education">Education</option>
                                <option value="BIT">B.I.T.</option>
                                <option value="HBM">H.B.M.</option>
                                <option value="Computer Studies">Computer Studies</option>
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
                    <button class="btn btn-primary" type="submit" name="addseb" form="addseb">add user</button>
                    <a class="btn btn-secondary" href="settings.php">Cancel</a>
                </div>
            </div>
        </form>
    </main>
    <?php
    $upload_folder = "/uploads";

    if (isset($_POST['addseb'])) {
        $student_id = $_POST['studentid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $council = $_POST['council'];
        $course = $_POST['course'];
        $major = $_POST['major'];
        $year = $_POST['year'];
        $section = $_POST['section'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $position = $_POST['position'];


        // Check if the student_id already exists in the database.
        $check_id = mysqli_query($cxn, "SELECT student_id FROM seb WHERE student_id = '$student_id'") or die("Error in query: " . mysqli_error($cxn));

        // Check if the username already exists in the database.
        $check_username = mysqli_query($cxn, "SELECT username FROM seb WHERE username ='$username'") or die("Error in query: " . mysqli_error($cxn));

        if ($check_id->num_rows > 0 || $check_username->num_rows > 0) {
            echo "<script type='text/javascript'> alert('Student ID and/or Username has been registered!'); location.href = 'addsebaccount.php'; </script>";
        } else {
            $image = basename($_FILES["image"]["name"]);
            $targetFileFolder = $upload_folder . $image;
            $fileType = pathinfo($targetFileFolder, PATHINFO_EXTENSION);
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFileFolder)) {
                    $add = mysqli_query($cxn, "INSERT INTO seb (student_id, username, password, first_name, last_name, council, course, major, year, section, position, image) VALUES ('$student_id', '$username', '$password', '$firstname', '$lastname', '$council', '$course', '$major', '$year', '$section', '$position', '$image')") or die("Error in query: " . mysqli_error($cxn));
                    echo "<script type='text/javascript'> alert('Registration Successful!'); location.href = 'settings.php'; </script>";
                } else {
                    echo "<script type='text/javascript'> alert('File upload failed!'); location.href = 'addsebaccount.php'; </script>";
                }
            } else {
                echo "<script type='text/javascript'> alert('Invalid file type!'); location.href = 'addsebaccount.php'; </script>";
            }
        }
    }
    ?>



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
    <script>
        var council = document.getElementById("council");
        var course = document.getElementById("course");
        var major = document.getElementById("major");

        function courseOptions() {
            var councilname = council.value;

            course.innerHTML = "<option>Select Course</option>";

            var courseOptions = {
                "Education": ["BEED", "BSED", "BTVTED", "BTLED"],
                "BIT": ["BIT"],
                "HBM": ["Hospitality Management", "Tourism Management", "Entrepreneurship"],
                "Computer Studies": ["Information Technology", "Information Systems"]
            };

            if (courseOptions[councilname]) {
                courseOptions[councilname].forEach(function(option) {
                    course.innerHTML += `<option value="${option}">${option}</option>`;
                });
            }
        }

        council.addEventListener("change", courseOptions);

        function majorOptions() {
            var coursename = course.value;

            var majorOptions = {
                "BSED": ["English", "Filipino", "Mathematics", "Science", "Social Studies"],
                "BTVTED": ["Automotive Technology", "Electrical Technology", "Food Service Management", "Drafting Technology", "Electronics Technology", "Garments, Fashion and Design"],
                "BTLED": ["Home Economics", "Industrial Arts"],
                "BIT": ["Architectural Drafting Technology", "Cosmetology", "Electronics Technology", "Fashion and Apparel Technology", "Welding and Fabrication Technology", "Heating Ventilating Air Conditioning-Refrigeration Technology", "Automotive Technology", "Electrical Technology", "Food Technology"],
            };

            major.innerHTML = "<option>Select Major</option>";

            if (majorOptions[coursename]) {
                majorOptions[coursename].forEach(function(option) {
                    major.innerHTML += `<option value="${option}">${option}</option>`;
                });
            } else {
                major.innerHTML += "<option disabled>Select Major</option>";
                major.innerHTML += "<option selected value='None'>N/A</option>";
            }
        }

        course.addEventListener("change", majorOptions);
    </script>
</body>

</html>