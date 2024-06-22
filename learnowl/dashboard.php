<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
    <link rel="icon" type="image/jpg" href="/images/LearnOwl.jpg">
    <title>Dashboard</title>
</head>

<body>
    <?php include 'php/fetch_courses.php'; ?>
    <?php include 'php/fetch_analytics.php'; ?>
    <?php include 'php/fetch_students.php'; ?>


    <div class="container">
        <!-- SIDEBAR -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/LearnOwl.jpg">
                    <h2>Learn <span class="success">Owl</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-rounded">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-symbols-rounded">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="students.php">
                    <span class="material-symbols-rounded">
                        person
                    </span>
                    <h3>Students</h3>
                </a>
                <a href="instructor.php">
                    <span class="material-symbols-rounded">
                        groups
                    </span>
                    <h3>Instructor</h3>
                </a>
                <a href="home.html">
                    <span class="material-symbols-rounded">
                        logout
                    </span>
                    <h3>Back Home</h3>
                </a>
            </div>
        </aside>
        <!--END OF SIDEBAR-->

        <!-- MAIN CONTENT -->
        <main>
            <h1>Analytics</h1>
            <!--ANALYTICS-->
            <div class="analyse">
                <div class="students" href="instructor.php">
                    <div class="status">
                        <div class="info">
                            <h3>students</h3>
                            <h1><?= $students_count ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                +81%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="courses" href="instructor.php">
                    <div class="status">
                        <div class="info">
                            <h3>Courses</h3>
                            <h1><?= $courses_count ?></h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                +65%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instructors">
                    <div class="status">
                        <div class="info">
                            <h3>Instructors</h3>
                            <h1>17</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                48%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END OF ANALYSES-->

            <div class="new-students">
                <h2>New Students</h2>
                <div class="student-list">
                    <?php foreach ($students as $student): ?>
                        <div class="student">
                            <img src="images/user.jpg" alt="Anonymous Image">
                            <h2><?= htmlspecialchars($student) ?></h2>
                            <p>New Student</p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="courses-table">
                    <a href="students.php">Show More</a>
                </div>
            </div>

            <!--END NEW STUDENTS-->


            <!--COURSES TABLE-->
            <div class="courses-table">
                <h2>Courses</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Instructor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($courses as $course): ?>
                            <tr>
                                <td><?= htmlspecialchars($course['id']) ?></td>
                                <td><?= htmlspecialchars($course['title']) ?></td>
                                <td><?= htmlspecialchars($course['description']) ?></td>
                                <td><?= htmlspecialchars($course['instructor']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="instructor.php">Show More</a>
            </div>
            <!--END OF COURSES TABLE-->
        </main>
        <!--END OF MAIN CONTENT-->

        <!--RIGHT SECTION-->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-symbols-rounded">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-symbols-rounded 
                    active">light_mode </span>
                    <span class="material-symbols-rounded 
                    ">dark_mode </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Ahmed</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/Ahmed Alaa.jpg">
                    </div>
                </div>

            </div>
            <!--END OF NAV-->

            <!--ADD NEW-->
            <div class="user-profile">
                <div class="logo">
                    <img src="images/LearnOwl.jpg">
                    <h2>Learn Owl</h2>
                    <p>Educational Webiste</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Add New</h2>
                    <span class="material-symbols-rounded">notifications_none</span>
                </div>



                <div class="notification add-reminder">
                    <div>
                        <span class="material-symbols-rounded">add</span>
                        <a href="new_student.php">
                            <h3>Add Student</h3>
                        </a>
                    </div>
                </div>
                <div class="notification add-reminder">
                    <div>
                        <span class="material-symbols-rounded">add</span>
                        <a href="new_course.php">
                            <h3>Add Course</h3>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/dashboard.js"></script>
</body>

</html>
