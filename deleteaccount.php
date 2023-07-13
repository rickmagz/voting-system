<?php
session_start();
include 'db.php';

$id = $_SESSION['id'];

$edit_account = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$id'") or die("Error in query: $edit_account." . mysqli_error($cxn));

$get_image = mysqli_query($cxn, "SELECT * FROM uploads WHERE student_id='$id'") or die("Error in query: $get_image." . mysqli_error($cxn));

if (mysqli_num_rows($get_image) > 0) {
    $i = mysqli_fetch_assoc($get_image);
    $image = $i['filename'];

    if (mysqli_num_rows($edit_account) > 0) {
        $a = mysqli_fetch_assoc($edit_account);
        $id = $id;
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $council = $a['council'];
        $course = $a['course'];
        $major = $a['major'];
        $year = $a['year'];
        $section = $a['section'];
        $username = $a['username'];
        $password = $a['password'];



?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <title>Delete Account - ISATU Miagao Campus Student Republic Election</title>
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
                <form action="deleteaccount.php" method="POST" id="deleteprofile" enctype='multipart/form-data'>
                    <hr />
                    <div class="card" style="
              box-shadow: 0px 0px 20px var(--bs-gray);
              margin-left: 100px;
              margin-right: 100px;
            ">
                        <div class="card-body" style="color: var(--bs-black)">
                            <h2 style="font-family: Muli">
                                <strong>Confirm Account Deletion?</strong>
                            </h2>
                            <h4 style="font-family: Muli">
                                <strong>Student Information</strong>
                            </h4>
                            <div class="row">
                                <div class="col mb-3 mt-3" id="id">
                                    <span for="id">Student ID</span>
                                    <input type="text" class="form-control" id="id" value="<?php echo $id; ?>" name="id" readonly />
                                </div>
                                <div class="col align-self-center" id="image">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col " id="firstname-1">
                                    <span for="name">First Name</span>
                                    <input type="text" class="form-control" id="firstname" value="<?php echo $first_name; ?>" name="firstname" disabled />
                                </div>
                                <div class="col" id="lastname-1">
                                    <span for="name">Last Name</span>
                                    <input type="text" class="form-control" id="lastname" value="<?php echo $last_name; ?>" name="lastname" disabled />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3 mt-3">
                                    <span for="name">Council*</span>
                                    <input type="text" class="form-control" id="council" value="<?php echo $council; ?>" name="council" disabled />
                                </div>
                                <div class="col mb-3 mt-3">
                                    <span for="name">Course*</span>
                                    <input type="text" class="form-control" id="course" value="<?php echo $course; ?>" name="course" disabled />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <span for="name">Major*</span>
                                    <input type="text" class="form-control" id="major" value="<?php echo $major; ?>" name="major" disabled />
                                </div>
                                <div class="col-xl-3" id="year">
                                    <span for="name">Year*</span>
                                    <input type="text" class="form-control" id="year" value="<?php echo $year; ?>" name="year" disabled />
                                </div>
                                <div class="col-xl-3" id="section">
                                    <span for="name">Section*</span>
                                    <input type="text" class="form-control" id="section" value="<?php echo $section; ?>" name="section" disabled />
                                </div>
                                <span class="text-danger mt-3">*If you have shifted or changed your course, delete this account and make a new one.</span>
                            </div>
                            <hr />
                            <h4><strong>Login Credentials</strong></h4>
                            <div class="row  mt-3 mb-3">
                                <div class="col-xl-4" id="username">
                                    <label for="email">Username</label>
                                    <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" name="username" disabled />
                                </div>
                                <div class="col-xl-4" id="password">
                                    <label for="email">Password</label>
                                    <input type="password" class="form-control" id="password" value="<?php echo $password; ?>" name="password" disabled />
                                </div>

                            </div>
                            <hr />
                            <button class="btn btn-primary" type="submit" name="delete" form="deleteprofile">confirm delete</button>

                            <a class="btn btn-secondary" href="myaccount.php?id=<?php echo $id; ?>">Cancel</a>
                        </div>
                    </div>
                </form>
        <?php
    }
}
        ?>

        <?php
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            mysqli_query($cxn, "DELETE FROM `student` WHERE `student_id`='$id'") or die(mysqli_error($cxn));
            mysqli_query($cxn, "DELETE FROM `uploads` WHERE `student_id`='$id'") or die(mysqli_error($cxn));
            echo "<script type='text/javascript'> alert('Student Info deleted!'); location.href = 'index.php'; </script>";

            session_destroy();
            $cxn->close();
        }
        ?>

            </main>
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