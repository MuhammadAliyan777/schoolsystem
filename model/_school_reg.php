<?php
include "../controller/connection.php";

if(isset($_POST['btn']))
{
    $school_name = $_POST['school_name'];
    $school_address = $_POST['school_address'];
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $password = md5($_POST['password']);
    $plan = $_GET['plan_id'];

    $sql = "SELECT * FROM `schools_list` WHERE `school_name` = '$school_name'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo "<script>alert('School Already registered by this name')</script>";
    }

    else{
        $date = date("Y/m/d");
        $sql = "INSERT INTO `schools_list`(`school_name`, `school_address`, `admin_name`, `admin_email`, `password`, `reg_date`,`plan`) VALUES ('$school_name','$school_address','$admin_name','$admin_email','$password','$date',$plan)";
        $res = mysqli_query($conn,$sql);

        header('Location: billing.php');
    }
}