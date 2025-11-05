<?php

session_start();

if(!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

$name = $_POST['student_name'];
$grade = $_POST['student_grade'];

$student = [
    'name' => $name,
    'grade' => $grade,
];

array_push($_SESSION['students'], $student);

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
            <input type="text" id="name" name="student_name" placeholder="Student Name" required>
            <input type="number" id="grade" name="student_grade" placeholder="Grade Input" required>
            <button type="submit">Create</button>
        </div>
    </form>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['students'] as $student) : ?>
                    <tr>
                        <td><?php echo $student['name'] ?></td>
                        <td><?php echo $student['grade'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>