<?php
include "controller/connection.php";
session_start();
$teacher_id = $_SESSION['teacher_id'];
$sql = "SELECT * FROM `teacher` WHERE id = $teacher_id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>