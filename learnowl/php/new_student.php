<?php
include "db_conn.php";

if (isset($_POST["submit"])) {

    $name = $_POST["name"];

    $email = $_POST["email"];

    $gpa = $_POST["GPA"];

    $assigned_course = $_POST["assigned_course"];

    $request = "insert into users (name, email, GPA, assigned_course) 
    values('$name', '$email', '$gpa', '$assigned_course')";

    mysqli_query($conn, $request);
    echo "<script>alert('Data has been sent!')</script>";
    header("Location: /learnowl/students.php");
} else {


}

// Fetch courses from the database
$courses_query = "SELECT title FROM courses";
$courses_result = mysqli_query($conn, $courses_query);

if (!$courses_result) {
    die("Query failed: " . mysqli_error($conn));
}

$courses = [];
while ($row = mysqli_fetch_assoc($courses_result)) {
    $courses[] = $row['title'];
}

mysqli_close($conn);
?>
