<?php ob_start(); ?>
<?php include "model/_viewteacher.php"; ?>
<?php include "model/_updateteacher.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Teachers</title>

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
                                <h3 class="page-title">Edit Teachers</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="students.php">Teacher</a></li>
                                    <li class="breadcrumb-item active">Edit Teachers</li>
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
                                            <h5 class="form-title student-info">Teacher Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
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
                                                <label>Email <span class="login-danger">*</span></label>
                                                <input required name="email" class="form-control" type="text" value="<?php $email = $row['email']; echo $email;?>">
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
                                                <label>Phone No</label>
                                                <input required name="phone_no" class="form-control" type="text" value="<?php $phone_no = $row['mobile']; echo $phone_no;?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Join Date</label>
                                                <input required name="join_date" class="form-control" type="text" value="<?php $join_date = $row['join_date']; echo $join_date;?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Qualification <span class="login-danger">*</span></label>
                                                <input required name="qualification" class="form-control"  type="text" value="<?php $qualification = $row['qualification']; echo $qualification;?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Experience </label>
                                                <input required name="experience" class="form-control" type="text" value="<?php $experience = $row['experience']; echo $experience;?>">
                                            </div>
                                        </div>
                                     
 
                                        
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Faculty Id <span class="login-danger">*</span></label>
                                                <input required name="faculty_id" class="form-control"  type="text" value="<?php $faculty_id = $row['faculty_roll_id']; echo $faculty_id;?>">
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Address <span class="login-danger">*</span></label>
                                                <input required name="address" class="form-control"  type="text" value="<?php $address = $row['address']; echo $address;?>">
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