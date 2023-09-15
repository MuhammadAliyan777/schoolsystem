<?php
include "controller/connection.php";

$std_id = $_SESSION['std_id'];

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];
    $dob = $_POST['dob'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/' . $image;
    $update_old_image = $_POST['update_old_image'];

    // Check if a new image is uploaded
    if (!empty($image)) {
        // New image is uploaded
        move_uploaded_file($image_tmp_name, $image_folder);
    } else {
        // No new image uploaded, keep the existing image value
        $image = $update_old_image;
    }

    // Prepare the statement
    $sql = "UPDATE `student` SET `name`='$name',`email`='$email',`phone_no`='$phone',`grade` = $grade,`dob` = '$dob',`image`='$image' WHERE id = $std_id";
    $stmt = mysqli_prepare($conn, $sql);
    $_SESSION['std_name'] = $name;
    $_SESSION['std_email'] = $email;

    // Exte the statement
    if (mysqli_stmt_execute($stmt)) {
        header('Location: profile.php');
        exit; // Make sure to exit after redirecting
    } else {
        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
    }
    header('Location: profile.php');
    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

