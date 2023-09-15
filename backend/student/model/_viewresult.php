<?php
include "controller/connection.php";
session_start();
$std_id = $_SESSION['std_id'];
$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `student` WHERE id = $std_id";
$res = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_assoc($res);
$grade = $row2['grade'];
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $sql = "SELECT * FROM `exam_dates` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $exam_name = $row['exam_name'];
    $sql = "SELECT * FROM `result` WHERE `std_id` = $std_id AND `school_id` = $school_id AND `exam_name` = '$exam_name'";
    $res = mysqli_query($conn, $sql);
}
