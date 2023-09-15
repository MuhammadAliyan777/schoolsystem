<?php
ob_start();
include "model/_addmarks.php";
$teacher_id = $_SESSION['teacher_id'];
$sql1 = "SELECT * FROM `classes` WHERE teacher_id = $teacher_id";
$res = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($res);
$grade_exam = $row['grade'];
$currentyear = date('Y');
$sql = "SELECT * FROM `exam_dates` WHERE `year` = $currentyear AND `grade` = $grade_exam";
$res3 = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- ... Other CSS links ... -->

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Students Marks</title>

    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <?php
        include "controller/nav.php";
        ?>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Students</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="student-group-form">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input name="by_id" type="text" class="form-control" placeholder="Search by ID ...">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="by_name" class="form-control" placeholder="Search by Name ...">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="by_grade" class="form-control" placeholder="Search by Grade ...">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="search-student-btn">
                                    <button type="btn" name="search_btn" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">

                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Assign Marks</h3>
                                        </div>
                                        <div class="col-auto text-end float-end ms-auto download-grp">
                                            <a href="classes.php" class="btn btn-outline-gray me-2 active"><i class="feather-list"></i></a>
                                            <a href="teachers-grid.html" class="btn btn-outline-gray me-2"><i class="feather-grid"></i></a>
                                            <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                            <a href="add-teacher.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->

                                <div class="table-responsive">
                                    <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Grade</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php include "model/_viewmystudents.php"; ?>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    echo '
                                    <td>' . $row['id'] . '</td>
                                    <td>' . $row['name'] . '</td>
                                    <td>' . $row['grade'] . '</td>
                                    <td><button type="button" class="btn btn-info mt-1" data-bs-toggle="modal" data-bs-target="#login-modal" data-userid="' . $row["id"] . '">Add</button></td>
                                   
 

                                    </td>
                                    </tr>';
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


            <footer>
                <p>Copyright © 2022 Dreamguys.</p>
            </footer>

        </div>

    </div>
    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <div class="auth-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-lg">
                                    <img src="assets/img/logo.png" alt="" height="42">
                                </span>
                            </a>
                        </div>
                    </div>
                    <form action="#" method="post" class="px-3">
                        <div class="mb-3">
                            <input class="form-control" name="std_id" type="hidden" id="emailaddress1" required>
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label">Marks</label>
                            <input class="form-control" name="marks"  step="0.01" min="0.00" max="100.00" required placeholder="Enter Marks">
                        </div>
                        <div class="mb-3">
                           
                            <label>Exam <span class="login-danger">*</span></label>
                            <select name="exam_name" required class="form-control">
                                <option>Select Exam</option>
                                <?php
                                while ($row3 = mysqli_fetch_assoc($res3)) {
                                    echo '<option selected value = "' . $row3['exam_name'] . '">' . $row3['exam_name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        </div>
                        <div class="mb-2 text-center">
                            <button name="btn" class="btn rounded-pill btn-primary" type="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#login-modal').on('show.bs.modal', function(event) {
                console.log("Modal opened");
                var button = $(event.relatedTarget);
                var userID = button.data('userid');
                var subname = button.data('subname');
                console.log("UserID:", userID);
                console.log("SubjectName", subname);
                var modalBody = $(this).find('.modal-body');
                var emailInput = modalBody.find('#emailaddress1');
                emailInput.val(userID);
                var subinput = modalBody.find('#subinput');
                subinput.val(subname);
                // ... rest of your code ...
            });
        });
    </script>



    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/feather.min.js"></script>

    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../assets/plugins/datatables/datatables.min.js"></script>

    <script src="../assets/js/script.js"></script>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <!-- Modal content -->
    </div>
</body>

</html>
<?php
ob_end_flush();
?>