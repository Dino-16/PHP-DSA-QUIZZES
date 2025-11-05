<?php

session_start();

if(!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

$name = $_POST['student_name'];
$grade = $_POST['student_grade'];

$_SESSION['students'][] = [
    'name' => $name,
    'grade' => $grade,
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Management</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <h1 class="title">Student Grade Management</h1>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <input type="text" name="student_name" placeholder="Student Name" required>
            <input type="number" name="student_grade" placeholder="Grade Input" required>
            <button type="submit">Create</button>
        </div>
    </form>

    <div>
        <?php
            foreach($_SESSION['students'] as $student) {
                 echo "Name: " . $student['name'] . " | Grade: " . $student['grade'] . "<br>";
            }
        ?>
    </div>
</body>
</html>