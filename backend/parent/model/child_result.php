<?php
include "controller/connection.php";
session_start();
$parent_id = $_SESSION['parent_id'];
$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `parent` WHERE id = $parent_id AND `school_id` = $school_id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$child_id = $row['child_id'];   
$sql = "SELECT * FROM `result` WHERE std_id = $child_id AND `school_id` = $school_id";
$res = mysqli_query($conn, $sql);
if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $sql = "SELECT * FROM `exam_dates` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $exam_name = $row['exam_name'];
    $sql = "SELECT * FROM `result` WHERE `std_id` = $std_id AND `school_id` = $school_id AND `exam_name` = '$exam_name'";
    $res = mysqli_query($conn, $sql);
}
