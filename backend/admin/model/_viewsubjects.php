<?php

include "controller/connection.php";
$school_id = $_SESSION['school_id'];
 
$sql = "SELECT * FROM `classes` WHERE `school_id` = $school_id";
$res = mysqli_query($conn,$sql);
 

if(isset($_POST['search_btn']))
{
    $id = $_POST['by_id'];
    $name = $_POST['by_name'];
    $teacher_name = $_POST['by_teacher'];

    $que = "SELECT * FROM `classes` WHERE id LIKE $id OR class_name LIKE '$name' OR teacher_name LIKE '$teacher_name'";
    $res = mysqli_query($conn,$que);
    header('Location: exam.php');
}

?>