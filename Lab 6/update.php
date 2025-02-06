<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
    <h2>Update Student</h2>
    <form action="process_update.php" method="post">
        <label for="rollno">Roll No:</label><br>
        <input type="text" id="rollno" name="rollno" required><br><br>
        <label for="name">New Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="course">New Course:</label><br>
        <input type="text" id="course" name="course"><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
