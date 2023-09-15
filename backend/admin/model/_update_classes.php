<?php
session_start();
$school_id = $_SESSION['school_id'];
include "controller/connection.php";
if(isset($_POST['up_btn']))
{
    $id = $_POST['id'];
    $class_name = mysqli_real_escape_string($conn, $_POST['class_name']);
    $teacher_name = $_POST['teacher_name'];
    $grade = $_POST['grade'];
    

    $update = "UPDATE `classes` SET `class_name`='$class_name',`teacher_name`='$teacher_name',`grade`= $grade WHERE id = $id";
    $res = mysqli_query($conn,$update);

    
    header('Location: classes.php');
}