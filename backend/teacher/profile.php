<?php ob_start(); 
include "model/_viewprofile.php";
include "model/_updateprofile.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Profile</title>

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

  <?php include "controller/nav.php";?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    
                                        <img class="rounded-circle" alt="User Image" src="../uploaded_img/<?php echo $row['picture'];?>">
                             
                                </div>
                                <div class="col ms-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0"><?php echo $row['name'];?></h4>
                                    <h6 class="text-muted"><?php echo $row['qualification'];?></h6>
                                    <div class="user-Location"><i class="fas fa-map-marker-alt"></i> &ensp;&ensp;<?php echo $row['address'];?></div>
                                    <div class="about-text"><i class="fas fa-phone"></i>&ensp;&ensp;<?php echo $row['mobile'];?></div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#edit_tab">Edit Profile</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <div class="tab-pane fade show active" id="per_details_tab">

                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9"><?php echo $row['name'];?></p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
                                                    <p class="col-sm-9"><?php echo $row['dob'];?></p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                    <p class="col-sm-9"><?php echo $row['email'];?></p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                                    <p class="col-sm-9"><?php echo $row['mobile'];?></p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                                    &ensp;<?php echo $row['address'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 
                               
                                </div>

                            </div>


                            <div id="edit_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Edit Profile</h5>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" 
                                                        name="email"
                                                        value="<?php echo $row['email'];?>"class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone.No</label>
                                                        <input type="number" 
                                                        name="phone"
                                                        value="<?php echo $row['mobile'];?>"class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" 
                                                        value="<?php echo $row['address'];?>"name="address" 
                                                        
                                                        class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Qualification</label>
                                                        <input type="text" 
                                                        value="<?php echo $row['qualification'];?>"name="qualification" 
                                                        
                                                        class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Experience</label>
                                                        <input type="text" 
                                                        value="<?php echo $row['experience'];?>"name="experience" 
                                                        
                                                        class="form-control">
                                                    </div>
                                                          <input type="hidden" name="update_old_image" value="<?php echo $row['picture'];?>" class="form-control" />

                                                    <input class="btn btn-dark" name="image" type="file" accept="image/png,image/jpg,image/jpeg,image/jfif"><br>Change Profile Picture</input>
                                                   <br><br> <button class="btn btn-primary" name="btn" type="submit">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <script src="../assets/plugins/datatables/datatables.min.js"></script>

    <script src="../assets/js/script.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>