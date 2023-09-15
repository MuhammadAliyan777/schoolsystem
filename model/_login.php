<?php

include "../controller/connection.php";
session_start();
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['pass']);

    $head = md5("head123");
    $sales = md5("sales123");
    if($email=="head@gmail.com" && $password==$head)
    {
        $_SESSION['head_name'] = "Head";
        $_SESSION['head_email'] = "head@gmail.com";
        $_SESSION['head_pass'] = "head123";
        $_SESSION['head_id'] = 1000;
        header('Location: ../backend/head/index.php');
        exit();
    }
    else if($email=="sales@gmail.com" && $password==$sales)
    {
        $_SESSION['sales_name'] = "Sales Manager";
        $_SESSION['sales_email'] = "sales@gmail.com";
        $_SESSION['sales_pass'] = "sales123";
        $_SESSION['sales_id'] = 5000;
        header('Location: ../backend/sales/index.php');
        exit();
    }
    else{
    $sql = ("SELECT * FROM `user` WHERE email = '$email' AND password = '$password'") or die('query failed');
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);

        if ($row['role'] == 'admin') {
            
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['school_id'] = $row['school_id'];
            header('Location: ../backend/admin/index.php');
            exit();

        }  else if ($row['role'] == 'teacher') {
            $_SESSION['teacher_name'] = $row['name'];
            $_SESSION['teacher_email'] = $row['email'];
            $_SESSION['te_pass'] = $row['password'];
            $t_id = $row['id'];
            $sql = ("SELECT * FROM `teacher` WHERE `user_id` = $t_id") or die('query failed');
            $res = mysqli_query($conn, $sql);
            $row5 = mysqli_fetch_assoc($res);
            $_SESSION['teacher_id'] = $row5['id'];
            $_SESSION['school_id'] = $row['school_id'];
            header('Location: ../backend/teacher/index.php');
            exit();

        }  
        
        else if ($row['role'] == 'student') {
            $_SESSION['std_name'] = $row['name'];
            $_SESSION['std_email'] = $row['email'];
            $_SESSION['std_pass'] = $row['password'];
            $s_id = $row['id'];
            $sql = ("SELECT * FROM `student` WHERE `user_id` = $s_id") or die('query failed');
            $res = mysqli_query($conn, $sql);
            $row6 = mysqli_fetch_assoc($res);
            $_SESSION['std_id'] = $row6['id'];
            $_SESSION['school_id'] = $row['school_id'];
            header('Location: ../backend/student/index.php');
            exit();

        }
        else if ($row['role'] == 'parent') {
            $_SESSION['parent_name'] = $row['name'];
            $_SESSION['parent_email'] = $row['email'];
            $_SESSION['par_pass'] = $row['password'];
            $p_id = $row['id'];
            $sql = ("SELECT * FROM `parent` WHERE `user_id` = $p_id") or die('query failed');
            $res = mysqli_query($conn, $sql);
            $row8 = mysqli_fetch_assoc($res);
            $_SESSION['parent_id'] = $row8['id'];
            $_SESSION['school_id'] = $row['school_id'];
            header('Location: ../backend/parent/index.php');
            exit();
        }
    } else {
        echo "<script>alert('Invalid Email or Password')</script>";
    }
    }
    ini_set('display_errors', 1);
error_reporting(E_ALL);
}
?>
