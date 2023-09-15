<?php
include "../controller/connection.php";

// Update the result status for all students to "granted"
$sql = "UPDATE `result` SET `status`='granted'";
$res = mysqli_query($conn, $sql);

// Display a message
echo '<script>alert("All results granted!")</script>';

// Redirect back to the previous page
header("Location: ../grant-result.php"); // Replace with the actual URL of the previous page
?>
