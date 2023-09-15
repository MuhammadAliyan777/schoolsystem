<?php

include "controller/connection.php";

$sql = "SELECT * FROM `teacher`";
$res = mysqli_query($conn,$sql);

 


if(isset($_POST['search_btn']))
{
    $id = $_POST['by_id'];
    $name = $_POST['by_name'];
    $phone = $_POST['by_phone'];

    $que = "SELECT * FROM `teacher` WHERE id LIKE $id OR name LIKE '$name' OR mobile LIKE '$phone'";
    $res = mysqli_query($conn,$que);
    header('Location: teachers.php');
}

?>