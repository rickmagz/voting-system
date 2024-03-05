<?php
sleep(1);
include './db.php';

if (isset($_POST['request'])) {
    $request = $_POST['request'];

    if ($request == 'Education') {
        $query = mysqli_query($cxn, "SELECT * FROM student WHERE council='Education'");
        $count = mysqli_num_rows($query);

?>

        <div class="col-xl-12" style="margin-top: 10px">
            <div class="table-responsive-lg">
                <table class="table table-hover table-sm table-bordered">

                    <?php
                    if ($count) {

                    ?>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Council</th>
                                <th>Course</th>
                                <th>Major</th>
                                <th>Year & Section</th>
                                <th>Action</th>
                            </tr>

                        <?php
                    } else {
                        echo "No record found.";
                    }
                        ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($e = mysqli_fetch_assoc($query)) {
                                $student_id = $e['student_id'];
                                $lname = $e['last_name'];
                                $fname = $e['first_name'];
                                $council = $e['council'];
                                $course = $e['course'];
                                $major = $e['major'];
                                $year = $e['year'];
                                $section = $e['section'];
                            ?>
                        </tbody>
                        <tr class="user<?php echo $student_id; ?>">
                            <td><?php echo $student_id ?></td>
                            <td><?php echo $lname; ?>, <?php echo $fname; ?></td>
                            <td><?php echo $council; ?></td>
                            <td><?php echo $course; ?></td>
                            <td><?php echo $major; ?></td>
                            <td><?php echo $year ?> - <?php echo $section; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" type="button" href="./deletestudentprofile.php?id=<?php echo $e['student_id']; ?>" target="_self">
                                    delete
                                </a>
                            </td>

                        </tr>

                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>

    <?php
    } elseif ($request == 'BIT') {
        $query = mysqli_query($cxn, "SELECT * FROM student WHERE council='B.I.T.'");
        $count = mysqli_num_rows($query);

    ?>

        <div class="col-xl-12" style="margin-top: 10px">
            <div class="table-responsive-lg">
                <table class="table table-hover table-sm table-bordered">

                    <?php
                    if ($count) {

                    ?>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Council</th>
                                <th>Course</th>
                                <th>Major</th>
                                <th>Year & Section</th>
                                <th>Action</th>
                            </tr>

                        <?php
                    } else {
                        echo "No record found.";
                    }
                        ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($e = mysqli_fetch_assoc($query)) {
                                $student_id = $e['student_id'];
                                $lname = $e['last_name'];
                                $fname = $e['first_name'];
                                $council = $e['council'];
                                $course = $e['course'];
                                $major = $e['major'];
                                $year = $e['year'];
                                $section = $e['section'];
                            ?>
                        </tbody>
                        <tr class="user<?php echo $student_id; ?>">
                            <td><?php echo $student_id ?></td>
                            <td><?php echo $lname; ?>, <?php echo $fname; ?></td>
                            <td><?php echo $council; ?></td>
                            <td><?php echo $course; ?></td>
                            <td><?php echo $major; ?></td>
                            <td><?php echo $year ?> - <?php echo $section; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" type="button" href="./deletestudentprofile.php?id=<?php echo $e['student_id']; ?>" target="_self">
                                    delete
                                </a>
                            </td>

                        </tr>

                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>

    <?php
    } elseif ($request == 'Computer Studies') {

        $query = mysqli_query($cxn, "SELECT * FROM student WHERE council='Computer Studies'");
        $count = mysqli_num_rows($query);

    ?>
        <div class="col-xl-12" style="margin-top: 10px">
            <div class="table-responsive-lg">
                <table class="table table-hover table-sm table-bordered">

                    <?php
                    if ($count) {

                    ?>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Council</th>
                                <th>Course</th>
                                <th>Major</th>
                                <th>Year & Section</th>
                                <th>Action</th>
                            </tr>

                        <?php
                    } else {
                        echo "No record found.";
                    }
                        ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($e = mysqli_fetch_assoc($query)) {
                                $student_id = $e['student_id'];
                                $lname = $e['last_name'];
                                $fname = $e['first_name'];
                                $council = $e['council'];
                                $course = $e['course'];
                                $major = $e['major'];
                                $year = $e['year'];
                                $section = $e['section'];
                            ?>
                        </tbody>
                        <tr class="user<?php echo $student_id; ?>">
                            <td><?php echo $student_id ?></td>
                            <td><?php echo $lname; ?>, <?php echo $fname; ?></td>
                            <td><?php echo $council; ?></td>
                            <td><?php echo $course; ?></td>
                            <td><?php echo $major; ?></td>
                            <td><?php echo $year ?> - <?php echo $section; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" type="button" href="./deletestudentprofile.php?id=<?php echo $e['student_id']; ?>" target="_self">
                                    delete
                                </a>
                            </td>

                        </tr>

                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>
    <?php


    } elseif ($request == 'HBM') {
        $query = mysqli_query($cxn, "SELECT * FROM student WHERE council='H.B.M.'");
        $count = mysqli_num_rows($query);

    ?>
        <div class="col-xl-12" style="margin-top: 10px">
            <div class="table-responsive-lg">
                <table class="table table-hover table-sm table-bordered">

                    <?php
                    if ($count) {

                    ?>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Council</th>
                                <th>Course</th>
                                <th>Major</th>
                                <th>Year & Section</th>
                                <th>Action</th>
                            </tr>

                        <?php
                    } else {
                        echo "No record found.";
                    }
                        ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($e = mysqli_fetch_assoc($query)) {
                                $student_id = $e['student_id'];
                                $lname = $e['last_name'];
                                $fname = $e['first_name'];
                                $council = $e['council'];
                                $course = $e['course'];
                                $major = $e['major'];
                                $year = $e['year'];
                                $section = $e['section'];
                            ?>
                        </tbody>
                        <tr class="user<?php echo $student_id; ?>">
                            <td><?php echo $student_id ?></td>
                            <td><?php echo $lname; ?>, <?php echo $fname; ?></td>
                            <td><?php echo $council; ?></td>
                            <td><?php echo $course; ?></td>
                            <td><?php echo $major; ?></td>
                            <td><?php echo $year ?> - <?php echo $section; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" type="button" href="./deletestudentprofile.php?id=<?php echo $e['student_id']; ?>" target="_self">
                                    delete
                                </a>
                            </td>

                        </tr>

                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>
    <?php
    } elseif ($request == 'Default') {
        $query = mysqli_query($cxn, "SELECT * FROM student ORDER BY council ASC");
        $count = mysqli_num_rows($query);

    ?>
        <div class="col-xl-12" style="margin-top: 10px">
            <div class="table-responsive-lg">
                <table class="table table-hover table-sm table-bordered">

                    <?php
                    if ($count) {

                    ?>
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Council</th>
                                <th>Course</th>
                                <th>Major</th>
                                <th>Year & Section</th>
                                <th>Action</th>
                            </tr>

                        <?php
                    } else {
                        echo "No record found.";
                    }
                        ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($e = mysqli_fetch_assoc($query)) {
                                $student_id = $e['student_id'];
                                $lname = $e['last_name'];
                                $fname = $e['first_name'];
                                $council = $e['council'];
                                $course = $e['course'];
                                $major = $e['major'];
                                $year = $e['year'];
                                $section = $e['section'];
                            ?>
                        </tbody>
                        <tr class="user<?php echo $student_id; ?>">
                            <td><?php echo $student_id ?></td>
                            <td><?php echo $lname; ?>, <?php echo $fname; ?></td>
                            <td><?php echo $council; ?></td>
                            <td><?php echo $course; ?></td>
                            <td><?php echo $major; ?></td>
                            <td><?php echo $year ?> - <?php echo $section; ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" type="button" href="./deletestudentprofile.php?id=<?php echo $e['student_id']; ?>" target="_self">
                                    delete
                                </a>
                            </td>

                        </tr>

                    <?php
                            }
                    ?>
                </table>
            </div>
        </div>

<?php
    }
}
?>