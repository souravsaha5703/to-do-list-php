<?php
session_start();
if($_SESSION['userid']=="" || !isset($_SESSION['userid'])) {
    header("location:login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style files/todolist.css">
    <title>To Do List Main Page</title>
</head>
<body>
    <nav>
        <div class="main-nav container">
            <img src="task icon.png" alt="">
            <ul>
                <li>Home</li>
                <li>Tasks</li>
                <a href="logout.php" id="logout">Logout</a>
            </ul>
        </div>
    </nav>
</body>
</html>