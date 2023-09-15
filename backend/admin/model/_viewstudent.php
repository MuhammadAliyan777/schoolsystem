<?php

include "controller/connection.php";
session_start();
$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `student` WHERE `school_id` = $school_id";
$res = mysqli_query($conn,$sql);

if(isset($_GET['update']))
{
    $id= $_GET['update'];
    $sql = "SELECT * FROM `student` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
}


?>