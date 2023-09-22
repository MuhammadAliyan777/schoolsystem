<?php
include "model/_addteacher.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Teachers</title>

    <link rel="shortcut icon" href="../assets//img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets//plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets//plugins/feather/feather.css">

    <link rel="stylesheet" href="../assets//plugins/icons/flags/flags.css">

    <link rel="stylesheet" href="../assets//css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="../assets//plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets//plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../assets//plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="../assets//css/style.css">
</head>

<body>

    <div class="main-wrapper">
 
    <!-- Header -->
    <?php include('controller/nav.php')?>

 


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Teachers</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="teachers.html">Teachers</a></li>
                                <li class="breadcrumb-item active">Add Teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Basic Details</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Faculty Roll ID <span class="login-danger">*</span></label>
                                                <input required type="number" name="roll" class="form-control" placeholder="Faculty Roll ID">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input id="name" required name="name" type="text" class="form-control" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Gender <span class="login-danger">*</span></label>
                                                <select required name="gender" class="form-control select">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Date Of Birth <span class="login-danger">*</span></label>
                                                <input id="dob" required name="dob" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Mobile <span class="login-danger">*</span></label>
                                                <input id="phone" required name="phone" type="text" class="form-control" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Age <span class="login-danger">*</span></label>
                                                <input id="age" required name="age" min="18" type="number" class="form-control" placeholder="Enter Age">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms calendar-icon">
                                                <label>Joining Date <span class="login-danger">*</span></label>
                                                <input  required name="join_date" class="form-control datetimepicker" type="text" placeholder="DD-MM-YYYY">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 local-forms">
                                            <div class="form-group">
                                                <label>Qualification <span class="login-danger">*</span></label>
                                                <input required name="qualification" class="form-control" type="text" placeholder="Enter Qualification">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Experience <span class="login-danger">*</span></label>
                                                <input required name="experience" class="form-control" type="text" placeholder="Enter Experience">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Login Details</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>Email <span class="login-danger">*</span></label>
                                                <input id="email" required name="email" type="text" class="form-control" placeholder="Enter Email">
                                            </div>
                                        </div>
                                         
                                    
                                     
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Address</span></h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group local-forms">
                                                <label>Address <span class="login-danger">*</span></label>
                                                <input required name="address" type="text" class="form-control" placeholder="Enter address">
                                            </div>
                                        </div>
                      
                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button name="btn" type="submit" class="btn btn-primary">Submit</button>
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
         const age = document.getElementById("age");
         const phone = document.getElementById("phone");
         const email = document.getElementById("email");
         const nameInput = document.getElementById("name"); // Replace "name" with your input field's ID
         const namePattern = /^[A-Za-z\s'-]+$/;
         const dobpattern = /^\d{4}-\d{2}-\d{2}$/;
         const agepattern = /^[0-9]{1,3}$/;
         const phonepattern = /^\d{10}$/;
         const emailpattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
         
         nameInput.addEventListener("input", function() {
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
          
         
     </script>
    <script src="../assets//js/jquery-3.6.0.min.js"></script>

    <script src="../assets//plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets//js/feather.min.js"></script>

    <script src="../assets//plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../assets//plugins/select2/js/select2.min.js"></script>

    <script src="../assets//plugins/moment/moment.min.js"></script>
    <script src="../assets//js/bootstrap-datetimepicker.min.js"></script>

    <script src="../assets//js/script.js"></script>
</body>

</html>