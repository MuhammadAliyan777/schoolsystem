<?php
include "controller/connection.php";

session_start();
$school_id = $_SESSION['school_id'];
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $roll = $_POST['roll'];
    $religion = $_POST['religion'];
    $email = $_POST['email'];
    $grade = $_POST['grade'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];
    $parent_name = $_POST['parent_name'];
    $parent_email = $_POST['parent_email'];
    $parent_phone = $_POST['parent_phone'];

    $pass = md5('Student' . $roll);
    $parent_pass = md5('Parent' . $roll);

    $check = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass' AND school_id = $school_id";
    $res =  mysqli_query($conn, $check);

    if (mysqli_num_rows($res) > 0) {
        echo "<script>alert('Student already exists');</script>";
    } else {
        $sql = "INSERT INTO `user`(`name`, `email`, `password`, `phone`, `age`, `gender`,`school_id`,`role`) VALUES ('$name','$email','$pass','$phone',$age,'$gender',$school_id,'student')";
        $res = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND school_id = $school_id";
        $res2 = mysqli_query($conn, $sql);

        if (mysqli_num_rows($res2) > 0) {
            $row2 = mysqli_fetch_assoc($res2);

            $c_id = $row2["id"];
            $sql = "INSERT INTO `student`(`user_id`,`school_id`, `name`, `gender`,`grade`, `dob`, `roll_no`, `religion`, `email`,`phone_no`) VALUES ($c_id,$school_id,'$name','$gender',$grade,'$dob',$roll,'$religion','$email','$phone')
            ";
            $res = mysqli_query($conn, $sql);

            $sql = "INSERT INTO `user`(`name`, `email`, `password`,`school_id`,`role`) VALUES ('$parent_name','$parent_email','$parent_pass',$school_id,'parent')";
            $res = mysqli_query($conn, $sql);
            $sql3 = "SELECT * FROM `user` WHERE `email` = '$parent_email' AND school_id = $school_id";
            $res4 = mysqli_query($conn, $sql3);
            if (mysqli_num_rows($res4) > 0) {
                $sql = "SELECT * FROM `student` WHERE `email` = '$email' AND school_id = $school_id";
                $res2 = mysqli_query($conn, $sql);
                $row3 = mysqli_fetch_assoc($res2);

                $cs_id = $row3["id"];
                $sql7 = "SELECT * FROM `user` WHERE email = '$parent_email' AND school_id = $school_id";
                $res7 = mysqli_query($conn, $sql7);
                $row7 = mysqli_fetch_assoc($res7);

                $id = $row7["id"];
                $sql2 = "INSERT INTO `parent`(`user_id`, `school_id`, `parent_name`, `child_name`, `child_id`, `email`,`phone`) VALUES ($id,$school_id,'$parent_name','$name',$cs_id,'$parent_email','$parent_phone')";
                $res2 = mysqli_query($conn, $sql2);
            }
        } else {
            echo '<script>alert("Error try again!")</script>';
        }
    }

    header("location: add-student.php");
}
