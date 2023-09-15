<?php
include "controller/connection.php";

$teacher_id = $_SESSION['teacher_id'];

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $phone = $_POST['phone'];
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
    $sql = "UPDATE `teacher` SET `name`='$name',`email`='$email',`mobile`='$phone', `qualification`='$qualification',`experience`='$experience', `address`='$address',`picture`='$image' WHERE id = $teacher_id";
    $stmt = mysqli_prepare($conn, $sql);
    $_SESSION['teacher_name'] = $name;
    $_SESSION['teacher_email'] = $email;

    // Exte the statement
    if (mysqli_stmt_execute($stmt)) {
        header('Location: profile.php');
        exit; // Make sure to exit after redirecting
    } else {
        echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>

