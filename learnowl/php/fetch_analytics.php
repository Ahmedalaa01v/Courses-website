<?php
// fetch_analytics.php
include 'db_conn.php';

// Fetch students count
$students_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM users");
$students_count = mysqli_fetch_assoc($students_result)['count'];

// Fetch courses count
$courses_result = mysqli_query($conn, "SELECT COUNT(*) AS count FROM courses");
$courses_count = mysqli_fetch_assoc($courses_result)['count'];

mysqli_close($conn);
?>
