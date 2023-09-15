<?php
include "controller/connection.php";
$std_id = $_SESSION['std_id'];
$sql = "SELECT * FROM `student` WHERE id = $std_id";
$res = mysqli_query($conn, $sql);
$row2 = mysqli_fetch_assoc($res);
$grade = $row2['grade'];
$sql = "SELECT * FROM `exam_dates` WHERE `grade` = $grade";
$res = mysqli_query($conn, $sql);

if (isset($_POST['search_btn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['by_id']); // Escape user input
    $name = mysqli_real_escape_string($conn, $_POST['by_name']); // Escape user input
    $teacher_name = mysqli_real_escape_string($conn, $_POST['by_teacher']); // Escape user input

    $que = "SELECT * FROM `exam_dates` WHERE id = $id OR class_name LIKE '%$name%' OR teacher_name LIKE '%$teacher_name%'";
    $res = mysqli_query($conn, $que);

    // You might want to fetch results and assign them to $res again
    // $res = mysqli_query($conn, $que);
}

?>

<!-- ... (HTML content) ... -->
