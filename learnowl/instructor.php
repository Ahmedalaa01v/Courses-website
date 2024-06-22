<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            background-color: #001f3f;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }

        @keyframes twinkle {
            0% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        .container {
            position: relative;
            width: 90%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            z-index: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
            letter-spacing: 1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            font-size: 18px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            color: #555;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tbody tr:hover {
            background-color: #e0f7fa;
            cursor: pointer;
            transform: scale(1.02);
            transition: all 0.3s ease;
        }

        tbody tr:hover td {
            background-color: #e0f7fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #2980b9;
        }

        .edit-btn {
            background-color: #3498db;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        .edit-btn:hover {
            background-color: #2980b9;
        }

        .delete-btn {
            background-color: #e74c3c;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        .add-btn {
            background-color: #2ecc71;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .add-btn:hover {
            background-color: #27ae60;
        }
    </style>
</head>

<body>
    <div class="stars"></div>
    <div class="container">
        <h1>Courses List</h1>
        <a href="new_course.php"><button class="add-btn">Add new Course</button></a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Instructor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "learnowl";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if (isset($_POST['delete_id'])) {
                    $delete_id = $_POST['delete_id'];
                    $delete_sql = "DELETE FROM courses WHERE id = '$delete_id'";
                    $conn->query($delete_sql);
                }

                $sql = "SELECT id, title, description, instructor FROM courses";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr id='course-" . $row["id"] . "'>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["title"] . "</td>
                                <td>" . $row["description"] . "</td>
                                <td>" . $row["instructor"] . "</td>
                                <td>
                                    <a href='edit_course.php'><button class='edit-btn'>Edit</button></a>
                                    <form method='post' action=''>
                                        <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                                        <button type='submit' class='delete-btn'>Delete</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No courses found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
