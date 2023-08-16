<?php
session_start();
include 'db.php';

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$session_id = $_SESSION['link_id'];
$student_id = $_SESSION['id'];

//get student data from db
$get_student = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$student_id'") or die("Error in query: $get_student." . mysqli_error($cxn));

if (mysqli_num_rows($get_student) > 0) {
    $s = mysqli_fetch_assoc($get_student);
    $council = $s['council'];
    $course = $s['course'];
    $major = $s['major'];
    $year = $s['year'];
    $section = $s['section'];
    $username = $s['username'];
    $pass = $s['password'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Profile - ISATU Miagao Campus Student Republic Election</title>
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
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/ISAT-U-logo-shadow1.png" width="50px" height="50px"><img src="assets/img/sr-logo.png" width="50px" height="50px"><span style="margin-left: 9px;font-family: Muli;color: var(--bs-blue);font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" style="background: var(--bs-blue);border-radius: 10px;color: var(--bs-gray-100);font-weight: bold;" href="vote.php">VOTE NOW</a></li>
                    <li class="nav-item" style="padding: 8px;"><a class="nav-link active" style="padding: 0px;" href="dashboard.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="candidates.php">Candidates</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <form action="editprofile.php" method="POST" id="editprofile" enctype='multipart/form-data'>
            <hr />
            <div class="card" style="
              box-shadow: 0px 0px 20px var(--bs-gray);
              margin-left: 100px;
              margin-right: 100px;
            ">
                <div class="card-body" style="color: var(--bs-black)">
                    <h2 style="font-family: Muli">
                        <strong>Edit Student Information</strong>
                    </h2>
                    <div class="row">
                        <div class="col mb-3 mt-3" id="id">
                            <span for="id">Student ID</span>
                            <input type="text" class="form-control" id="id" value="<?php echo $student_id; ?>" name="id" autofocus required />
                        </div>
                        <div class="col align-self-center" id="image">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col " id="firstname-1">
                            <span for="name">First Name</span>
                            <input type="text" class="form-control" id="firstname" value="<?php echo $first_name; ?>" name="firstname" required />
                        </div>
                        <div class="col" id="lastname-1">
                            <span for="name">Last Name</span>
                            <input type="text" class="form-control" id="lastname" value="<?php echo $last_name; ?>" name="lastname" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3 mt-3">
                            <span for="name">Council</span>
                            <input type="text" class="form-control" id="council" value="<?php echo $council; ?>" name="council" required readonly />
                        </div>
                        <div class="col mb-3 mt-3">
                            <span for="name">Course</span>
                            <input type="text" class="form-control" id="course" value="<?php echo $course; ?>" name="course" required readonly />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-xl-6">
                            <span for="name">Major</span>
                            <input type="text" class="form-control" id="major" value="<?php echo $major; ?>" name="major" required readonly />
                        </div>
                        <div class="col-xl-3" id="year">
                            <span for="name">Year</span>
                            <input type="text" class="form-control" id="year" value="<?php echo $year; ?>" name="year" required readonly />
                        </div>
                        <div class="col-xl-3" id="section">
                            <span for="name">Section</span>
                            <input type="text" class="form-control" id="section" value="<?php echo $section; ?>" name="section" required readonly />

                        </div>
                    </div>
                    <h6 class="text-danger" style="font-style:'Lato', sans-serif;"><strong>REMINDER: DELETE YOUR ACCOUNT IF YOU'VE SHIFTED TO ANOTHER COURSE OR COUNCIL.</strong></h6>
                    <hr />
                    <h2><strong>Edit Login Credentials</strong></h2>
                    <div class="row  mt-3 mb-3">
                        <div class="col-xl-4" id="username">
                            <label for="email">Username</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" name="username" required />
                        </div>
                        <div class="col-xl-4" id="password">
                            <label for="email">Password</label>
                            <input type="password" class="form-control" id="password" value="<?php echo $pass; ?>" name="password" required />
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit" name="edit" form="editprofile">confirm Edit</button>
                    <a class="btn btn-danger" href="deleteaccount.php?id=<?php echo $student_id; ?>">Delete Account</a>
                    <a class="btn btn-secondary" href="myaccount.php">Cancel</a>
                </div>
            </div>
        </form>
    </main>
    <?php
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $update = mysqli_query($cxn, "UPDATE student SET student_id='$id', username='$username', password='$password', first_name='$firstname', last_name='$lastname' WHERE id='$session_id'") or die("Error in query: $update." . mysqli_error($cxn));

        echo "<script type='text/javascript'> alert('Successfully Modified Please log in again!'); location.href = 'login.php'; </script>";
    }

    ?>
    <footer style="background: var(--bs-primary);box-shadow: 0px -2px 20px var(--bs-blue); margin-top: 50px;" data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-white);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023 All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/new-age.js"></script>
</body>

</html>