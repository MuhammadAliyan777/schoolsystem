<?php
session_start();
include "controller/connection.php";
if(isset($_POST['up_btn']))
{
    $id = $_POST['id'];
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    

    $update = "UPDATE `schools_list` SET `school_name`='$school_name',`school_address`='$school_address',`admin_name`='$admin_name',`admin_email`='$admin_email' WHERE id = $id";
    $res = mysqli_query($conn,$update);

    
    header('Location: school_list.php');
}