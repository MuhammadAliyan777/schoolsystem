<?php
include "controller/connection.php";

session_start();
$school_id = $_SESSION['school_id'];
if (isset($_POST['btn'])) {
    $class_name = mysqli_real_escape_string($conn, $_POST['class_name']);
    $teacher_name = $_POST['teacher_name'];
    $grade = $_POST['grade'];

    $check = "SELECT * FROM `classes` WHERE `class_name` = '$class_name' AND `grade` = $grade AND school_id = $school_id";
    $res =  mysqli_query($conn, $check);

    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Class already exists');</script>";
    } else {


        $sql = "SELECT * FROM `teacher` WHERE `name` = '$teacher_name' AND school_id = $school_id";
        $res2 = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($res2) > 0)
    {
    $row2 = mysqli_fetch_assoc($res2);
    
        $id= $row2["id"];
        $user_id = $row2["user_id"];
        $currentYear = date("Y");


        $sql = "INSERT INTO `classes`(`user_id`,`school_id`,`teacher_id`, `class_name`, `teacher_name`, `grade`,`year`) VALUES ($user_id,$school_id,$id,'$class_name','$teacher_name',$grade,$currentYear)";
        $res = mysqli_query($conn, $sql);

    }
    else{
        echo '<script>alert("Error try again!")</script>';
    }


        header("location: add_classes.php");
    }
}
