<?php
include "controller/connection.php";
session_start();
 
$parent_id = $_SESSION['parent_id'];
$sql = "SELECT * FROM `parent` WHERE id = $parent_id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>