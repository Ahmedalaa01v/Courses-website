<?php
// fetch_students.php
include 'db_conn.php';

// Fetch student data
$students_query = "SELECT name FROM users";
$students_result = mysqli_query($conn, $students_query);

$students = [];
if (mysqli_num_rows($students_result) > 0) {
    while ($row = mysqli_fetch_assoc($students_result)) {
        $students[] = $row['name'];
    }
}

mysqli_close($conn);
?>
