<?php ob_start(); ?>
<?php include "model/_viewstudent.php"; ?>
<?php include "model/_updatestudent.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Students</title>

    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="../assets/plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

    <?php include "controller/nav.php" ?>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Edit Students</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="students.php">Student</a></li>
                                    <li class="breadcrumb-item active">Edit Students</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card comman-shadow">
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title student-info">Student Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                        </div>
                                    <input type="hidden" value="<?php $row = mysqli_fetch_assoc($res); $id = $row['id']; echo $id;?>" name="id" id="">
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input required name="name" class="form-control" type="text" value="<?php $name = $row['name']; echo $name;?>">
                                            </div>
                                        </div>
                                  
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select required name="gender" class="form-control select">
                                                    <option><?php  $gender = $row['gender']; echo $gender;?></option>
                                                    <option>Female</option>
                                                    <option>Male</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input required name="dob" value="<?php  $dob = $row['dob']; echo $dob;?>" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Roll </label>
                                                <input required name="roll" class="form-control" type="text" value="<?php $roll = $row['roll_no']; echo $roll;?>">
                                            </div>
                                        </div>
                                     
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Religion <span class="login-danger">*</span></label>
                                                <select required name="religion" class="form-control select">
                                                    <option><?php  $religion = $row['religion']; echo $religion;?></option>
                                                    <option>Hindu</option>
                                                    <option>Christian</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>E-Mail <span class="login-danger">*</span></label>
                                                <input required name="email" class="form-control"  type="text" value="<?php $email = $row['email']; echo $email;?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Class <span class="login-danger">*</span></label>
                                                <input required name="class" class="form-control"  type="text" value="<?php $class = $row['class']; echo $class;?>">
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Phone No</label>
                                                <input required name="phone_no" class="form-control" type="text" value="<?php $phone_no = $row['phone_no']; echo $phone_no;?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group students-up-files">
                                                <label>Upload Student Photo (150px X 150px)</label>
                                                <div class="uplod">
                                                    <label class="file-upload image-upbtn mb-0">
                                                        Choose File <input type="file">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button name="up_btn" type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/feather.min.js"></script>

    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../assets/plugins/select2/js/select2.min.js"></script>

    <script src="../assets/plugins/moment/moment.min.js"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="../assets/js/script.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>