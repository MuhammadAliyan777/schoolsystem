 <?php include "model/_addstudent.php"; ?>
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

         <?php include "controller/nav.php"; ?>


         <div class="page-wrapper">
             <div class="content container-fluid">

                 <div class="page-header">
                     <div class="row align-items-center">
                         <div class="col-sm-12">
                             <div class="page-sub-header">
                                 <h3 class="page-title">Add Students</h3>
                                 <ul class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="students.html">Student</a></li>
                                     <li class="breadcrumb-item active">Add Students</li>
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
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label> Name <span class="login-danger">*</span></label>
                                                 <input name="name" class="form-control" type="text" placeholder="Enter Your Name">
                                             </div>
                                         </div>

                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Gender <span class="login-danger">*</span></label>
                                                 <select name="gender" class="form-control select">
                                                     <option>Select Gender</option>
                                                     <option value="male">Male</option>
                                                     <option value="female">Female</option>
                                                     <option value="others">Others</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms calendar-icon">
                                                 <label>Date Of Birth <span class="login-danger">*</span></label>
                                                 <input name="dob" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Roll </label>
                                                 <input name="roll" class="form-control" type="text" placeholder="Enter Roll Number">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Religion <span class="login-danger">*</span></label>
                                                 <select name="religion" class="form-control select">
                                                     <option>Please Select Religion </option>
                                                     <option value="islam">Islam</option>
                                                     <option value="christian">Christian</option>
                                                     <option value="others">Others</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>E-Mail <span class="login-danger">*</span></label>
                                                 <input name="email" class="form-control" type="email" placeholder="Enter Email Address">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Grade <span class="login-danger">*</span></label>
                                                 <input name="grade" class="form-control" type="number" min="1" max="10" placeholder="Enter Class">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Phone </label>
                                                 <input class="form-control" name="phone" type="text" placeholder="Enter Phone Number">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Age </label>
                                                 <input class="form-control" name="age" type="number" min="7" max="20" placeholder="Enter Age">
                                             </div>
                                         </div>

                                         <div class="col-12 col-sm-4">
                                             <div class="form-group students-up-files">
                                                 <label>Upload Student Photo (150px X 150px)</label>
                                                 <div class="uplod">
                                                     <label class="file-upload image-upbtn mb-0">
                                                         Choose File <input type="file" name="image">
                                                     </label>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Parent Name<span class="login-danger">*</span></label>
                                                 <input name="parent_name" class="form-control" type="text" placeholder="Enter Parent Name">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Parent Email <span class="login-danger">*</span></label>
                                                 <input name="parent_email" class="form-control" type="email" placeholder="Enter Parent Email">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Parent Phone <span class="login-danger">*</span></label>
                                                 <input name="parent_phone" class="form-control" type="text" placeholder="Enter Parent Phone No">
                                             </div>
                                         </div>

                                         <div class="col-12">
                                             <div class="student-submit">
                                                 <button type="submit" name="btn" class="btn btn-primary">Submit</button>
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