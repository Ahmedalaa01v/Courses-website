<?php
include "db_conn.php";

if (isset($_POST["submit"])) {

    $title = $_POST["title"];

    $description = $_POST["description"];

    $instructor = $_POST["instructor"];

    $request = "insert into courses (title, description, instructor) 
    values('$title', '$description', '$instructor')";

    mysqli_query($conn, $request);
    echo "<script>alert('Data has been sent!')</script>";
    header("Location: /learnowl/course.php");
} else {

}
