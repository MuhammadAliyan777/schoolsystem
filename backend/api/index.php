<?php
$conn = mysqli_connect('localhost','root','','vision');
$roll_no = $_POST['roll_number'];
$sql = "SELECT * FROM student WHERE roll_number = $roll_no";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$std_id = $row['id'];
$sql = "SELECT * FROM `result` WHERE std_id = $std_id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
echo json_encode($row);
if($row['success'] == "true")
{
    print(json_decode($res));
}

?>