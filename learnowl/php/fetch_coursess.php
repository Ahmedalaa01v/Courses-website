<?php
// fetch_courses.php
include 'db_conn.php';

$sql = "SELECT id, title, description, instructor FROM courses";
$result = mysqli_query($conn, $sql);

$courses = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

