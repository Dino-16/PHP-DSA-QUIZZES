<?php

session_start();

if(!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

if (!empty($_POST['student_name']) && isset($_POST['student_grade'])) {
    $name = $_POST['student_name'];
    $grade = $_POST['student_grade'];

    $student = [
        'name' => $name,
        'grade' => $grade,
    ];

    array_push($_SESSION['students'], $student);
}


if (isset($_POST['delete'])) {
    $deleteIndex = $_POST['delete'];
    unset($_SESSION['students'][$deleteIndex]);
    $_SESSION['students'] = array_values($_SESSION['students']); 
}

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['students'] as $index => $student) : ?>
                    <tr>
                        <td><?php echo $student['name'] ?></td>
                        <td><?php echo $student['grade'] ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="delete" value="<?php echo $index; ?>">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>