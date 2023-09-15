<?php

include "controller/connection.php";
$school_id = $_SESSION['school_id'];

$sql = "SELECT * FROM `teacher` WHERE `school_id` = $school_id";
$res = mysqli_query($conn,$sql);
if(isset($_GET['update']))
{
    $id= $_GET['update'];
    $sql = "SELECT * FROM `teacher` WHERE id = $id AND `school_id` = $school_id";
    $res = mysqli_query($conn,$sql);
}


if(isset($_POST['search_btn']))
{
    $id = $_POST['by_id'];
    $name = $_POST['by_name'];
    $phone = $_POST['by_phone'];

    $que = "SELECT * FROM `teacher` WHERE id LIKE $id OR name LIKE '$name' OR mobile LIKE '$phone'";
    $res = mysqli_query($conn,$que);
    header('Location: teachers.php');
}

?>