<!DOCTYPE html>
<html>

<head>
    <title>Edit Course</title>
    <link rel="stylesheet" href="style/edit_course.css">
</head>

<body>
    <div class="container">
        <h1>Edit Course</h1>
        <br>
        <br>
        <form method="post" action="php/edit_course.php">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>ID:</label>
            <input type="text" name="ID" value="" placeholder="Enter the student ID" required><br>
            <label>Title:</label>
            <input type="text" name="title" value="" placeholder="Text"><br>
            <label>Description:</label>
            <textarea name="description" placeholder="Description"></textarea><br>
            <label>Instructor:</label>
            <input type="text" name="instructor" value="" placeholder="Instructor"><br>
            <input type="submit" value="Update Course">
        </form>
        <br>
        <a href="instructor.php">Back to Dashboard</a>
    </div>
</body>

</html>
