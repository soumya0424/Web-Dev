<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic authentication
    if ($username == 'admin' && $password == 'password') {
        echo "<h2>Welcome, Admin</h2>";
        echo "<form action='add.php' method='get'><button type='submit'>Add Student</button></form>";
        echo "<form action='del.php' method='get'><button type='submit'>Delete Student</button></form>";
        echo "<form action='update.php' method='get'><button type='submit'>Update Student</button></form>";
    } else {
        echo "<h2>Invalid Credentials</h2>";
    }
}
?>
