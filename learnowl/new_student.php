<?php

include ("php/new_student.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="Udb_TF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/new_student.css" />
    <title>New student</title>
</head>

<body>
    <div class="login">
        <h1>Add New Student</h1>
        <form action="" method="post">
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter Name" dir="ltr" />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter Email" />
            </div>
            <div>
                <label for="GPA">GPA</label>
                <input type="text" id="GPA" min="0" name="GPA" required placeholder="Enter GPA from 1 to 4" />
            </div>
            <div class="courses">
                <label for="assigned_course">Assigned Course</label>
                <select id="assigned_course" name="assigned_course">
                    <?php foreach ($courses as $course): ?>
                        <option value="<?php echo htmlspecialchars($course); ?>"><?php echo htmlspecialchars($course); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>

</html>
