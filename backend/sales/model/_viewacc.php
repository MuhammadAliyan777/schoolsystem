<?php

include "controller/connection.php";
$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `bank` WHERE `user_id` = 1000";
$res = mysqli_query($conn,$sql);

if(isset($_GET['update']))
{
    $id= $_GET['update'];
    $sql = "SELECT * FROM `classes` WHERE id = $id AND `school_id` = $school_id";
    $res = mysqli_query($conn,$sql);
}

if(isset($_GET['delete']))
{
    $id= $_GET['delete'];
    $sql = "DELETE FROM `schools_list` WHERE id = $id AND `school_id` = $school_id";
    $res = mysqli_query($conn,$sql);
    header('Location:  classes.php');
}


if(isset($_POST['search_btn']))
{
    $id = $_POST['by_id'];
    $name = $_POST['by_name'];
    $grade = $_POST['by_grade'];

    $que = "SELECT * FROM `classes` WHERE id LIKE $id OR class_name LIKE '$name' OR grade LIKE '$grade'";
    $res = mysqli_query($conn,$que);
    header('Location: classes.php');
}

?>