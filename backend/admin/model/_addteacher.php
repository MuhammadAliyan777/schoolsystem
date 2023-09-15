<?php
include "controller/connection.php";

session_start();
$school_id  = $_SESSION['school_id'];
if(isset($_POST['btn']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $join_date = $_POST['join_date'];
    $teacher_roll = $_POST['roll'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $pass = md5('Teacher'.+$teacher_roll);

    $check = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";
    $res =  mysqli_query($conn, $check);

    if(mysqli_num_rows($res) > 0)
    {
        echo "<script>alert('Teacher already exists');</script>";
    }
    else{
    $sql = "INSERT INTO `user`(`name`, `email`, `password`, `phone`, `age`, `gender`,`school_id`,`role`) VALUES ('$name','$email','$pass','$phone',$age,'$gender',$school_id,'teacher')";
    $res = mysqli_query($conn,$sql);

    $sql = "SELECT `id` FROM `user` WHERE `email` = '$email'";
    $res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res) > 0)
{
$row = mysqli_fetch_assoc($res);

    $id=$row["id"];
    $sql = "INSERT INTO `teacher`(`user_id`,`school_id`, `name`, `email`, `gender`, `dob`, `mobile`, `join_date`, `qualification`, `experience`, `faculty_roll_id`, `address`) VALUES ($id,$school_id,'$name','$email','$gender','$dob','$phone','$join_date','$qualification','$experience','$teacher_roll','$address')";
    $res = mysqli_query($conn,$sql);
}


else{
    echo'<script>alert("Error try again!")</script>';
}
    }

    header ("location: add-teacher.php");
    

}






?>