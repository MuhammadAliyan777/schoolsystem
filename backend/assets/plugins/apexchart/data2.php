<?php
include "controller/connection.php"; // Include your database connection

// Fetch students' data from the database
$query = "SELECT * FROM students"; // Modify this query according to your database schema
$result = mysqli_query($conn, $query);

$students_data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $students_data[] = (int) $row['id']; // Assuming you have a column named 'students_count'
}

// Return the fetched data as JSON
echo json_encode($students_data);
?>
