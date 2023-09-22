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
                                                 <input id="name" name="name" pattern="^[A-Za-z\s'-]+$" class="form-control" required type="text" placeholder="Enter Your Name">
                                             </div>
                                         </div>

                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Gender <span class="login-danger">*</span></label>
                                                 <select required name="gender" class="form-control select">
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
                                                 <input required name="dob" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Roll </label>
                                                 <input required name="roll" class="form-control" type="text" placeholder="Enter Roll Number">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Religion <span class="login-danger">*</span></label>
                                                 <select required name="religion" class="form-control select">
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
                                                 <input required name="email" class="form-control" type="email" placeholder="Enter Email Address">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Grade <span class="login-danger">*</span></label>
                                                 <input required name="grade" class="form-control" type="number" min="1" max="10" placeholder="Enter Class">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Phone </label>
                                                 <input required class="form-control" name="phone" type="text" placeholder="Enter Phone Number">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Age </label>
                                                 <input required class="form-control" name="age" type="number" min="7" max="20" placeholder="Enter Age">
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
                                                 <input pattern="^[A-Za-z\s'-]+$" required name="parent_name" class="form-control" type="text" placeholder="Enter Parent Name">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Parent Email <span class="login-danger">*</span></label>
                                                 <input required name="parent_email" class="form-control" type="email" placeholder="Enter Parent Email">
                                             </div>
                                         </div>
                                         <div class="col-12 col-sm-4">
                                             <div class="form-group local-forms">
                                                 <label>Parent Phone <span class="login-danger">*</span></label>
                                                 <input name="parent_phone" required class="form-control" type="text" placeholder="Enter Parent Phone No">
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

     <script>
         const dob = document.getElementById("dob");
         const roll = document.getElementById("roll");
         const age = document.getElementById("age");
         const phone = document.getElementById("phone");
         const grade = document.getElementById("grade");
         const email = document.getElementById("email");
         const parentPhone = document.getElementById("parent_phone");
         const parentEmail = document.getElementById("parent_email");
         const parentInput = document.getElementById("parent_name");
         const nameInput = document.getElementById("name"); // Replace "name" with your input field's ID
         const namePattern = /^[A-Za-z\s'-]+$/;
         const dobpattern = /^\d{4}-\d{2}-\d{2}$/;
         const rollpattern = /^[A-Za-z0-9]+$/;
         const agepattern = /^[0-9]{1,3}$/;
         const phonepattern = /^\d{10}$/;
         const gradepattern = /^[A-Za-z0-9-+]+$/;
         const emailpattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
         const parentphonepattern = /^\d{10}$/;
         const parentemailpattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
         
         nameInput.addEventListener("input", function() {
             if (!namePattern.test(nameInput.value)) {
                 nameInput.setCustomValidity("Please enter a valid name.");
             } else {
                 nameInput.setCustomValidity("");
             }
         });
         parentInput.addEventListener("input", function() {
             if (!namePattern.test(nameInput.value)) {
                 nameInput.setCustomValidity("Please enter a valid name.");
             } else {
                 nameInput.setCustomValidity("");
             }
         });
         email.addEventListener("input", function() {
             if (!emailpattern.test(email.value)) {
                email.setCustomValidity("Please enter a valid email.");
             } else {
                email.setCustomValidity("");
             }
         });
         phone.addEventListener("input", function() {
             if (!phonepattern.test(phone.value)) {
                phone.setCustomValidity("Please enter a valid phone no.");
             } else {
                phone.setCustomValidity("");
             }
         });
         parentEmail.addEventListener("input", function() {
             if (!parentemailpattern.test(parentEmail.value)) {
                parentEmail.setCustomValidity("Please enter a valid email.");
             } else {
                parentEmail.setCustomValidity("");
             }
         });
         parentPhone.addEventListener("input", function() {
             if (!parentphonepattern.test(parentPhone.value)) {
                parentPhone.setCustomValidity("Please enter a valid phone no.");
             } else {
                parentPhone.setCustomValidity("");
             }
         });
         dob.addEventListener("input", function() {
             if (!dobpattern.test(dob.value)) {
                dob.setCustomValidity("Please enter a valid Dob.");
             } else {
                dob.setCustomValidity("");
             }
         });
         age.addEventListener("input", function() {
             if (!agepattern.test(age.value)) {
                age.setCustomValidity("Please enter a valid age.");
             } else {
                age.setCustomValidity("");
             }
         });
         roll.addEventListener("input", function() {
             if (!rollpattern.test(roll.value)) {
                roll.setCustomValidity("Please enter a valid name.");
             } else {
                roll.setCustomValidity("");
             }
         });
         grade.addEventListener("input", function() {
             if (!gradepattern.test(grade.value)) {
                grade.setCustomValidity("Please enter a valid grade.");
             } else {
                grade.setCustomValidity("");
             }
         });
     </script>
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