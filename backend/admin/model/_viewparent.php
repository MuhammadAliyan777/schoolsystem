<?php

include "controller/connection.php";
session_start();
$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `parent` WHERE school_id = $school_id";
$res = mysqli_query($conn,$sql);


if(isset($_GET['delete']))
{
    $id= $_GET['delete'];
    $sql = "DELETE FROM `parent` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    header('Location:  parents.php');
}


?>