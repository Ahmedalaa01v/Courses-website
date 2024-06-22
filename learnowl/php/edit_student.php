<?php
include "db_conn.php";
if (isset($_POST['ID']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['GPA']) && isset($_POST['assigned_course'])) {
    function validata($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $ID = validata($_POST['ID']);
    $name = validata($_POST['name']);
    $email = validata($_POST['email']);
    $GPA = validata($_POST['GPA']);
    $assigned_course = validata($_POST['assigned_course']);


    if (empty($ID)) {
        header("Location: edit_student.php?error=ID is required");
        exit();
    } else if (empty($name)) {
        header("Location: edit_student.php?error=name is required");
        exit();
    } else if (empty($email)) {
        header("Location: edit_student.php?error=email is required");
        exit();
    } else if (empty($GPA)) {
        header("Location: edit_student.php?error=GPA is required");
        exit();
    } else if (empty($assigned_course)) {
        header("Location: edit_student.php?error=assigned_course is required");
        exit();
    } else {

        $sql = "UPDATE users SET name='$name', email='$email', GPA='$GPA', assigned_course='$assigned_course' WHERE ID='$ID'";

        if (mysqli_query($conn, $sql)) {
            if (mysqli_affected_rows($conn) > 0) {
                header("Location: edit_student.php?error= No student updated ");
            } else {
                header("Location: edit_student.php?success=student updated successfully");
            }
        } else {
            header("Location: edit_student.php?error=Error updating student: " . mysqli_error($conn));
        }
        exit();
    }


} else {
    header("Location: /learnowl/students.php");
    exit();
}
?>
