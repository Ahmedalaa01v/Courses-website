<?php
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);


    if (empty($email)) {

        header("location: learnowl/login.php?error=your email is required");
        exit();
    } else if (empty($password)) {
        header("location: learnowl/login.php?error= password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {
            echo "Welcome in our page";
        }
    }
} else {
    header("location: learnowl/login.php?error");
    exit();
}


