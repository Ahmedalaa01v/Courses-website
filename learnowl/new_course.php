<?php

include ("php/new_course.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="Udb_TF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/new_student.css" />
    <title>New Course</title>
</head>

<body>
    <div class="login">
        <h1>Add New Course</h1>
        <form action="" method="post">
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required placeholder="Enter title" dir="ltr" />
            </div>
            <div>
                <label for="description">Description</label>
                <input type="description" id="description" name="description" required
                    placeholder="Enter description" />
            </div>
            <div>
                <label for="instructor">instructor</label>
                <input type="text" id="instructor" min="0" name="instructor" required placeholder="Enter instructor" />
            </div>

            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>

</html>
