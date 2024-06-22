<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learnowl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $GPA = $_POST['GPA'];
    $password = $_POST['password']; // Consider hashing the password before storing

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (name, email, GPA, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $GPA, $password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h1>1New record created successfully</h1>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
