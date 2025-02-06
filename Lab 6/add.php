<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="process_add.php" method="post">
        <label for="rollno">Roll No:</label><br>
        <input type="text" id="rollno" name="rollno" required><br><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="course">Course:</label><br>
        <input type="text" id="course" name="course" required><br><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
