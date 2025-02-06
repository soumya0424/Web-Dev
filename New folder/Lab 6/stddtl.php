<?php
if (isset($_GET['rollno'])) {
    $rollno = $_GET['rollno'];

    // Example of searching the database
    // Dummy data
    $students = [
        '101' => ['name' => 'Alice', 'course' => 'Math'],
        '102' => ['name' => 'Bob', 'course' => 'Science']
    ];

    if (array_key_exists($rollno, $students)) {
        echo "<h2>Student Details</h2>";
        echo "Roll No: $rollno<br>";
        echo "Name: " . $students[$rollno]['name'] . "<br>";
        echo "Course: " . $students[$rollno]['course'] . "<br>";
    } else {
        echo "<h2>No student found with Roll No: $rollno</h2>";
    }
}
?>
