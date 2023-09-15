<?php
session_start();
include "controller/connection.php";
if(isset($_POST['up_btn']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone_no = $_POST['phone_no'];
    $join_date = $_POST['join_date'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $faculty_id = $_POST['faculty_id'];
    $address = $_POST['address'];
   

    $update = "UPDATE `teacher` SET `name`='$name',`email` = '$email',`gender`='$gender',`dob`='$dob',`mobile` = '$phone_no',`join_date` = '$join_date', `qualification` = '$qualification', `experience` = '$experience',`faculty_roll_id` = $faculty_id, `address` = '$address' WHERE id = $id ";
    $res = mysqli_query($conn,$update);

    
    header('Location: teachers.php');
}