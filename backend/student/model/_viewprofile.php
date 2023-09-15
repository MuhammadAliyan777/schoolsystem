<?php
include "controller/connection.php";
session_start();
 
$std_id = $_SESSION['std_id'];
$sql = "SELECT * FROM `student` WHERE id = $std_id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>