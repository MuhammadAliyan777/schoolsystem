<?php

include "controller/connection.php";
session_start();
$sql = "SELECT * FROM `schools_list`";
$res = mysqli_query($conn,$sql);

if(isset($_GET['update']))
{
    $id= $_GET['update'];
    $sql = "SELECT * FROM `schools_list` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
}

if(isset($_GET['delete']))
{
    $id= $_GET['delete'];
    $sql = "DELETE FROM `schools_list` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    header('Location: school_list.php');
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