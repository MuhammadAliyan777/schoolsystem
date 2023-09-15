<?php ob_start(); ?>
<?php include "model/_viewparent.php"; ?>
<?php include "model/_updateparent.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Edit Parent</title>

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
                                <h3 class="page-title">Edit Parent</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="parent.php">Parent</a></li>
                                    <li class="breadcrumb-item active">Edit Parent</li>
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
                                            <h5 class="form-title student-info">Parent Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                        </div>
                                    <input type="hidden" value="<?php $row = mysqli_fetch_assoc($res); $id = $row['id']; echo $id;?>" name="id" id="">
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                                <label>Parent Name <span class="login-danger">*</span></label>
                                                <input name="parent_name" class="form-control" type="text" value="<?php $parent_name = $row['parent_name']; echo $parent_name;?>">
                                            </div>
                                        </div>
                                  
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Parent Email <span class="login-danger">*</span></label>
                                                <input name="parent_email" class="form-control" type="text" value="<?php $parent_email = $row['email']; echo $parent_email;?>">
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