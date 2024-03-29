<?php
session_start();
include '../db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Election Management - ISATU Miagao Campus Student Republic Election - SEC Dashboard</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Basic-icons.css">
</head>

<body>
     <nav class="navbar navbar-light navbar-expand-lg shadow-none" style="padding-top: 0px;padding-bottom: 0px;background: linear-gradient(-180deg, var(--bs-yellow) 39%, rgba(255,255,255,0.5) 100%);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img width="75" height="75" src="../assets/img/ISAT-U-logo-shadow1.png"><img width="75" height="75" src="../assets/img/sr-logo.png"><span style="margin-left: 4px;font-family: Lato, sans-serif;font-weight: bold;">ISATU Miagao Campus <br>Student Republic Election <br>Dashboard</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto" style="color: var(--bs-black);font-weight: bold;">
                    <li class="nav-item"><a class="nav-link" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" href="home.php#masthead" style="font-size: 18px;">Home</a></li>
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
    <main style="margin: 25px;margin-bottom: 119px;">
        <div class="row" style="margin-right: 24px;margin-left: 24px;">
            <div class="col-xl-10 offset-xl-1" style="margin-bottom: 50px;">
                <h2 style="font-family: Muli;">Election Management</h2>
                <hr>
                <div>
                    <ul class="nav nav-tabs nav-justified text-start" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">Filing History</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">View Candidate Info</a></li>
                    </ul>
                    <div class="tab-content" style="border-top-left-radius: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
                        <div class="tab-pane fade show active" role="tabpanel" id="tab-1" style="border-top-left-radius: 0px;border: 1px solid var(--bs-gray-300);border-top-width: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
                            <div class="container" style="margin-top: 20px;">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered">
                                                <thead style="background: var(--bs-blue);color: var(--bs-white);">
                                                    <tr>
                                                        <th>Name of Candidate</th>
                                                        <th>Position</th>
                                                        <th>Council</th>
                                                        <th>Filing Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 0;
                                                    $candidates = mysqli_query($cxn, "SELECT * FROM candidates ORDER BY timestamp desc") or die();
                                                    $candidates_query = mysqli_num_rows($candidates);

                                                    if ($candidates_query > 0) {
                                                        while ($c = mysqli_fetch_array($candidates)) {
                                                            $cand_sid = $c['student_id'];
                                                            $fname = $c['first_name'];
                                                            $lname = $c['last_name'];
                                                            $position = $c['position'];
                                                            $council = $c['council'];
                                                            $date = $c['timestamp'];



                                                            $i++;

                                                    ?>
                                                            <tr class="candidate<?php echo $cand_id; ?>">
                                                                <td><?php echo $fname; ?> <?php echo $lname; ?></td>
                                                                <td><?php echo $position; ?></td>
                                                                <td><?php echo $council; ?></td>
                                                                <td><?php echo $date; ?></td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    } else {
                                                        echo "<tr>
                                                    <td colspan='7'>No record found.</td>
                                                    </tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" id="tab-2" style="border-top-left-radius: 0px;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;border: 1px solid var(--bs-gray-300);border-top-width: 0px;padding: 12px;">
                            <div class="table-responsive-lg text-center d-xl-flex">
                                <table class="table table-hover table-bordered" style="overflow-x: auto;">
                                    <thead style="background: var(--bs-blue);color: var(--bs-white);">
                                        <tr>
                                            <th class="text-center">Student ID</th>
                                            <th class="text-center">Candidate Name</th>
                                            <th class="text-center">Running Position</th>
                                            <th class="text-center">Council</th>
                                            <th class="text-center">Course</th>
                                            <th class="text-center">Major</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        $candidates = mysqli_query($cxn, "SELECT * FROM candidates ORDER BY timestamp desc") or die();
                                        $candidates_query = mysqli_num_rows($candidates);

                                        if ($candidates_query > 0) {
                                            while ($c = mysqli_fetch_array($candidates)) {
                                                $cand_sid = $c['student_id'];
                                                $fname = $c['first_name'];
                                                $lname = $c['last_name'];
                                                $position = $c['position'];
                                                $council = $c['council'];
                                                $course = $c['course'];
                                                $major = $c['major'];

                                                $i++;

                                        ?>
                                                <tr class="candidate<?php echo $cand_id; ?>">
                                                    <td><?php echo $cand_sid; ?></td>
                                                    <td><?php echo $fname; ?> <?php echo $lname; ?></td>
                                                    <td><?php echo $position; ?></td>
                                                    <td><?php echo $council; ?></td>
                                                    <td><?php echo $course; ?></td>
                                                    <td><?php echo $major; ?></td>
                                                    <td class="text-center" style="padding: 3px;">
                                                        <a class="btn btn-danger btn-sm" type="button" href="delete_candidate.php?id=<?php echo $cand_sid; ?>" target="_self">delete</button>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr>
                                                    <td colspan='7'>No record found.</td>
                                                    </tr>";
                                        }
                                        ?>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer style="background: var(--bs-primary);box-shadow: 0px -2px 20px var(--bs-blue);" data-bs-spy="scroll">
        <div class="container">
            <p style="color: var(--bs-white);font-size: 16px;">©&nbsp;ISATU - Miagao Campus Student Republic Election 2023 All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/new-age.js"></script>
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
                course.innerHTML += "<option>Select Course</option>";
                course.innerHTML += "<option value='BIT'>Bachelor in Industrial Technology</option>";
            } else if (councilname == "HBM") {
                course.innerHTML += "<option disabled>Select Course</option>";
                course.innerHTML += "<option value='Hospitality Management'>Hospitality Management</option>";
                course.innerHTML += "<option value='Tourism Management'>Tourism Management</option>";
                course.innerHTML += "<option value='Entrepreneurship'>Entrepreneurship</option>";
            } else if (councilname == "Computer Studies") {
                course.innerHTML += "<option disabled>Select Course</option>";
                course.innerHTML += "<option value='Information Technology'>Information Technology</option>";
                course.innerHTML += "<option value='Information Systems'>Information Systems</option>";
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
            } else if (coursename == "BIT") {
                major.innerHTML += "<option disabled>Select Major</option>";
                major.innerHTML += "<option value='Architectural Drafting Technology'>Architectural Drafting Technology</option>";
                major.innerHTML += "<option value='Cosmetology'>Cosmetology</option>";
                major.innerHTML += "<option value='Electronics Technology'>Electronics Technology</option>";
                major.innerHTML += "<option value='Fashion and Apparel Technology'>Fashion and Apparel Technology</option>";
                major.innerHTML += "<option value='Welding and Fabrication Technology'>Welding and Fabrication Technology</option>";
                major.innerHTML += "<option value='Heating Ventilating Air Conditioning-Refrigeration Technology'>Heating Ventilating Air Conditioning-Refrigeration Technology</option>";
                major.innerHTML += "<option value='Automotive Technology'>Automotive Technology</option>";
                major.innerHTML += "<option value='Electrical Technology'>Electrical Technology</option>";
                major.innerHTML += "<option value='Food Technology'>Food Technology</option>";
            } else {
                major.innerHTML += "<option disabled>Select Major</option>";
                major.innerHTML += "<option selected value='None'>N/A</option>";
            }
        }

        course.addEventListener("change", majorOptions);
    </script>

</body>

</html>