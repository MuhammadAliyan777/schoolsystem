<?php

include "../controller/connection.php";

if(isset($_POST['btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "SELECT * FROM `contact` WHERE name = '$name' AND email = '$email' AND message = '$message'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0)
    {
        echo'<script>alert("Message already submitted")</script>';
    }

    else{
        $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
        $res = mysqli_query($conn,$sql);
        echo'<script>alert("Message submitted sucessfully")</script>';
        header('location: contact.php');
    }
}

?>