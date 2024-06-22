<?php
include "db_conn.php";
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['instructor'])) {
    function validata($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $title = validata($_POST['title']);
    $description = validata($_POST['description']);
    $instructor = validata($_POST['instructor']);
    $id = validata($_POST['ID']);


    if (empty($title)) {
        header("Location: index.php?error=Title is required");
        exit();
    } else if (empty($description)) {
        header("Location: index.php?error=Description is required");
        exit();
    } else if (empty($instructor)) {
        header("Location: index.php?error=Instructor is required");
        exit();
    } else {

        $sql = "UPDATE courses SET title='$title', description='$description', instructor='$instructor' WHERE ID='$id'";

        if (mysqli_query($conn, $sql)) {
            if (mysqli_affected_rows($conn) > 0) {
                header("Location: index.php?error= No Course updated ");
            } else {
                header("Location: index.php?success=Course updated successfully");
            }
        } else {
            header("Location: index.php?error=Error updating course: " . mysqli_error($conn));
        }
        exit();
    }


} else {
    header("Location: /learnowl/course.php");
    exit();
}
?>
