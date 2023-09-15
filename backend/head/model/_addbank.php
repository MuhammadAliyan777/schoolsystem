<?php
session_start();
include "./controller/connection.php";
$user_id = $_SESSION['head_id'];
$sql = "SELECT * FROM `bank` WHERE user_id = $user_id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
if(isset($_POST['btn']))
{
    $acc_no = $_POST['acc_no'];
    $bank_name = $_POST['b_name'];
    $name = $_POST['name'];
    $iban = $_POST['iban'];
    $sql = "SELECT * FROM `bank` WHERE acc_no = $acc_no";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        echo "<script>alert('Account already exists');</script>";
    }
    else{
        $sql = "INSERT INTO `bank`(`user_id`,`account_holder`, `bank_name`, `iban`, `acc_no`) VALUES ($user_id,'$name','$bank_name','$iban',$acc_no)";
        $res = mysqli_query($conn,$sql);
        header('Location: add-bank.php');
    }
}


if(isset($_POST['up_btn']))
{
    $acc_no = $_POST['acc_no'];
    $bank_name = $_POST['b_name'];
    $name = $_POST['name'];
    $iban = $_POST['iban'];
    $sql = "UPDATE `bank` SET `user_id`=$user_id,`account_holder`='$name',`bank_name`='$bank_name',`iban`='$iban',`acc_no`='$acc_no' WHERE user_id = $user_id";
    $res = mysqli_query($conn,$sql);
    header('Location: add-bank.php');
}