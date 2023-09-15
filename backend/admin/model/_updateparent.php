<?php

include "controller/connection.php";
session_start();
if(isset($_GET['update']))
{
    $id= $_GET['update'];
    $sql = "SELECT * FROM `parent` WHERE id = $id";
    $res = mysqli_query($conn,$sql);
    $parent_name = $_POST['parent_name'];
    $parent_email = $_POST['parent_email'];
    $sql = "UPDATE `parent` SET  `parent_name`='$parent_name',`email`='$parent_email' WHERE id = $id";
    $res = mysqli_query($conn,$sql);
}

?>