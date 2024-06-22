<!DOCTYPE html>
<html>

<head>
    <title>Edit Students</title>
    <link rel="stylesheet" href="style/edit_student.css">
</head>

<body>
    <div class="container">
        <h1>Edit student</h1>
        <br>
        <br>
        <form method="post" action="php/edit_student.php">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>ID:</label>
            <input type="text" name="ID" value="" placeholder="Enter the student ID" required><br>
            <label>name:</label>
            <input type="text" name="name" value="" placeholder="first name"><br>
            <label>email:</label>
            <input type="email" name="email" value="" placeholder="Email"><br>
            <label>GPA:</label>
            <input type="text" name="GPA" value="" placeholder="GPA"><br>
            <div class="courses">
                <label for="assigned_course">Assigned Course</label>
                <select id="assigned_course" name="assigned_course">
                    <option name="assigned_course" value="Algorithms">Algorithms</option>
                    <option name="assigned_course" value="DS">Data Structures</option>
                    <option name="assigned_course" value="oop">Object Oriented Programming</option>
                </select>
            </div>
            <input type="submit" value="Update student">
        </form>
        <br>
        <a href="#">Back to Dashboard</a>
    </div>
</body>

</html>
