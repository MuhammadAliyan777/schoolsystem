<?php

include "controller/connection.php";
session_start();
$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `result` WHERE `total_subjects` = 7 AND status = 'pending' AND `school_id` = $school_id";
$res = mysqli_query($conn,$sql);




?>