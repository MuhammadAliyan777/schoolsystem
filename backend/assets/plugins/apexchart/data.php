<?php
$conn = mysqli_connect('localhost','root','','vision');
// Fetch teachers' data from the database
$query = "SELECT * FROM teachers"; // Modify this query according to your database schema
$result = mysqli_query($conn, $query);

$teachers_data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $teachers_data[] = (int) $row['id']; // Assuming you have a column named 'teachers_count'
}

// Return the fetched data as JSON
echo json_encode($teachers_data);
?>
