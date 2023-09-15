<?php
include "controller/connection.php";
session_start();
function calculateGrade($percentage)
{
    if ($percentage >= 90) {
        return 'A';
    } elseif ($percentage >= 80) {
        return 'B';
    } elseif ($percentage >= 70) {
        return 'C';
    } elseif ($percentage >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

$teacher_id  = $_SESSION['teacher_id'];

$school_id = $_SESSION['school_id'];
$sql = "SELECT * FROM `student`";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

$currentyear = date('Y');
$sql = "SELECT * FROM `exam_dates` WHERE year = '$currentyear'";
$res2 = mysqli_query($conn, $sql);
if (isset($_GET['update'])) {
    $sub_id = $_GET['update'];
} else {
    header('Location: my_class.php');
}

if (isset($_POST['btn'])) {
    $std_id = $_POST['std_id'];
    $marks = $_POST['marks'];
    $exam_name = $_POST['exam_name'];
    $sql = "SELECT * FROM `marks` WHERE student_id = $std_id AND subject_id= '$sub_id'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        echo '<script>alert("Marks Already Added")</script>';
    } else {
        $sql = "SELECT * FROM `classes` WHERE id = $sub_id";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $sub_name = $row['class_name'];
        $sql = "INSERT INTO `marks`(`teacher_id`, `student_id`, `school_id`,`subject_id`, `subject_name`, `sub_marks`,`exam_name`) VALUES ($teacher_id,$std_id,$school_id,$sub_id,'$sub_name',$marks,'$exam_name')";
        $res = mysqli_query($conn, $sql);
        $sql = "SELECT * FROM `result` WHERE std_id = $std_id AND exam_name = '$exam_name'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        if (mysqli_num_rows($res) > 0) {
            $sql = "SELECT * FROM `marks` WHERE student_id = $std_id AND exam_name = '$exam_name'";
            $res = mysqli_query($conn, $sql);
            $row2 = mysqli_fetch_assoc($res);
            $sql = "SELECT SUM(marks.sub_marks) AS total_marks FROM `marks` WHERE student_id = $std_id AND school_id = $school_id";
            $result = mysqli_query($conn, $sql);

            $totalSum = 0; // Initialize total sum outside the loop

            while ($row = mysqli_fetch_assoc($result)) {
                $totalSum += $row['total_marks'];
                // No need to update result here
            }
            $sql = "SELECT COUNT(id) FROM `marks` WHERE student_id = $std_id";
            $res = mysqli_query($conn,$sql);
            $row9 = mysqli_fetch_assoc($res);
            $totalSubjects = $row9['COUNT(id)'];
            $percentage = ($totalSum / 700) * 100; // Calculate total percentage
            $grade = calculateGrade($percentage);
            $sql =  "UPDATE `result` SET `total_marks`=$totalSum, `total_subjects` = $totalSubjects,`percentage`=$percentage,`grade`='$grade',`status`='pending' WHERE `std_id` = $std_id AND `school_id` = $school_id";
            $res = mysqli_query($conn, $sql);

            // Move the redirect outside of the loop
            header('Location: my_class.php');
        } else {
            $sql = "SELECT COUNT(id) FROM `marks` WHERE student_id = $std_id";
            $res = mysqli_query($conn,$sql);
            $row9 = mysqli_fetch_assoc($res);
            $totalSubjects = $row9['COUNT(id)'];
            $sql = "INSERT INTO `result`(`std_id`, `school_id`, `exam_name`,`total_subjects`,`status`) VALUES ($std_id,$school_id,'$exam_name',$totalSubjects, 'pending')";
            $res = mysqli_query($conn, $sql);
            $sql = "SELECT SUM(marks.sub_marks) AS total_marks FROM `marks` WHERE student_id = $std_id AND school_id = $school_id";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $totalSum += $row['total_marks'];
              
            }
            $sql = "SELECT COUNT(id) FROM `marks` WHERE student_id = $std_id";
            $res = mysqli_query($conn,$sql);
            $row9 = mysqli_fetch_assoc($res);
            $totalSubjects = $row9['COUNT(id)'];
        $percentage = ($totalSum / 700) * 100; // Calculate total percentage
        $grade = calculateGrade($percentage);
        $sql =  "UPDATE `result` SET `total_marks`=$totalSum, `total_subjects` = $totalSubjects,`percentage`=$percentage,`grade`='$grade',`status`='pending' WHERE `std_id` = $std_id AND `school_id` = $school_id";
        $res = mysqli_query($conn, $sql);
            header('Location: my_class.php');
        }
    }
}
