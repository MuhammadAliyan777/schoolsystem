<?php
include "controller/connection.php";

session_start();
$school_id = $_SESSION['school_id'];
if (isset($_POST['btn'])) {
    $exam_name = mysqli_real_escape_string($conn, $_POST['exam_name']);
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $result_date = $_POST['result_date'];
    $grade = $_POST['grade'];

    $check = "SELECT * FROM `exam_dates` WHERE `exam_name` = '$exam_name' AND `grade` = $grade AND school_id = $school_id";
    $res =  mysqli_query($conn, $check);

    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Exam already added');</script>";
    } else {
        $currentYear = date("Y");

        $sql = "SELECT * FROM `classes` WHERE grade = $grade";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $classid = $row['id'];
        $sql = "INSERT INTO `exam_dates`(`school_id`, `class_id`, `grade`, `exam_name`, `start_date`, `end_date`, `result_date`, `year`) VALUES ('$school_id','$classid',$grade,'$exam_name','$start_date','$end_date','$result_date',$currentYear)";
        $res = mysqli_query($conn, $sql);

    
 


        header("location: add-exam.php");
    }
}
