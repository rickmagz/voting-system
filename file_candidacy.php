<?php
include 'db.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $get_info = mysqli_query($cxn, "SELECT * FROM student WHERE student_id='$id'") or die("Error in query: $get_info." . mysqli_error($cxn));

    if (mysqli_num_rows($get_info) > 0) {
        $i = mysqli_fetch_assoc($get_info);
        $student_id = $id;
        $fname = $i['first_name'];
        $lname = $i['last_name'];
        $council = $i['council'];
        $course = $i['course'];
        $major = $i['major'];
        $image = $i['image_file'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Filing of Candidacy - ISATU Miagao Campus Student Republic Election</title>
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
                    <span style="font-size: 24px">ISATU - Miagao Campus<br />Student Republic Election<br /></span><span style="font-size: 24px; font-weight: bold">FILING FOR CANDIDACY</span>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="file_candidacy.php" method="POST" id="file" enctype='multipart/form-data'>
                <hr />
                <div class="card" style="
              box-shadow: 0px 0px 20px var(--bs-gray);
              margin-left: 65px;
              margin-right: 65px;
            ">
                    <div class="card-body" style="color: var(--bs-black)">
                        <h2 style="font-family: Muli">
                            <strong>Candidate Information</strong>
                        </h2>
                        <div class="row">
                            <div class="col" id="position">
                                <div class="form mt-3">
                                    <label for="id">Running Position</label>
                                    <select class="form-select" name="position" id="position" required autofocus>
                                        <option selected disabled>Select Position</option>
                                        <option value="President">President</option>
                                        <option value="Vice President">Vice President</option>
                                        <option value="Senator">Senator</option>
                                        <option value="Batch Representative">Batch Representative</option>
                                        <option value="Governor">Governor</option>
                                        <option value="Vice Governor">Vice Governor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col" id="firstname">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="id" placeholder="Enter Student ID" name="id" value="<?php echo $student_id; ?>" required />
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
                                    <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname" value="<?php echo $fname; ?>" required />
                                    <label for="name">First Name</label>
                                </div>
                            </div>
                            <div class="col" id="lastname-1">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname" value="<?php echo $lname; ?>" required />
                                    <label for="name">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="council" placeholder="Enter council" name="council" value="<?php echo $council; ?>" required readonly />
                                    <label for="name">Council</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="course" placeholder="Enter course" name="course" value="<?php echo $course; ?>" required readonly />
                                    <label for="name">Course</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control" id="major" placeholder="Enter major" name="major" value="<?php echo $major; ?>" required readonly />
                                    <label for="name">Major</label>
                                </div>
                            </div>


                        </div>

                        <button class="btn btn-primary" type="submit" name="file" form="file">submit</button>
                        <a class="btn btn-secondary" href="myaccount.php">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <?php
    $upload_folder = "uploads/";

    if (isset($_POST['file'])) {
        $student_id = $_POST['id'];
        $position = $_POST['position'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $council = $_POST['council'];
        $course = $_POST['course'];
        $major = $_POST['major'];

        $image = basename($_FILES["image"]["name"]);
        $targetFileFolder = $upload_folder . $image;
        $fileType = pathinfo($targetFileFolder, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFileFolder)) {
                $file_cand = mysqli_query($cxn, "INSERT INTO candidates(student_id,position,first_name,last_name,council,course,major,image) VALUES('$student_id','$position','$firstname','$lastname','$council','$course','$major','$image')") or die("Error in query: $file_cand." . mysqli_error($cxn));
            }
        }

        echo "<script type='text/javascript'> alert('Candidacy File Submitted!'); location.href='myaccount.php'; </script>";
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
                    <a href="index.php" style="color: var(--bs-blue); text-decoration: none">Back to Home</a>
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