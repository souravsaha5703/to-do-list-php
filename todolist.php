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
    <div class="content container">
        <div class="heading">
            <p>Hello User</p>
        </div>
        <div class="input">
            <form action="#" method="post">
                <input type="text" name="task" id="input-task" placeholder="Enter your task">
                <input type="submit" value="Add Task" id="task-submit">
            </form>
        </div>
        <ul id="output-task">
            <li class="checked">Task 1<span><i class="fa-solid fa-xmark"></i></span></li>
        </ul>
    </div>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>