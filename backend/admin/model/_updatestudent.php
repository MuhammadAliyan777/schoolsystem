<?php
session_start();
include "controller/connection.php";
$school_id = $_SESSION['school_id'];
if (isset($_POST['up_btn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $phone_no = $_POST['phone_no'];

    $update = "UPDATE `student` SET `name`='$name',`gender`='$gender',`dob`='$dob',`roll_no`='$roll',`religion`='$religion',`email`='$email',`class`='$class',`phone_no`='$phone_no' WHERE id = $id ";
    $res = mysqli_query($conn, $update);


    $pass = md5("Student" . $roll);

    $sql = "UPDATE `user` SET `password` = '$pass' WHERE email = '$email' AND school_id = $school_id";
    $res = mysqli_query($conn, $sql);

    header('Location: students.php');
}
