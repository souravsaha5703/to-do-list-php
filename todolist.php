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
                <li><a href="todolist.php">Home</a></li>
                <li><a href="#">Tasks</a></li>
                <a href="logout.php" id="logout">Logout</a>
            </ul>
        </div>
    </nav>
    <div class="content container">
        <div class="heading">
            <p>Hello <?php
            $us=$_SESSION['username'];
            echo $us; 
             ?></p>
        </div>
        <div class="input">
            <form action="addtask.php" method="post">
                <input type="text" name="task" id="input-task" placeholder="Enter your task">
                <input type="submit" value="Add Task" id="task-submit">
            </form>
        </div>
        <ul id="output-task">
            <?php
            $connection=mysqli_connect("localhost","root","","tododb");
            $user=$_SESSION['userid'];
            $query="SELECT * from users_info WHERE id='$user'";
            $res=$connection->query($query);
            $row=$res->fetch_assoc();
            $id=$row['id'];
            $sel="SELECT * FROM list_table WHERE user_id='$id'";
            $result=$connection->query($sel);
            while($line=$result->fetch_assoc()){
             ?>
            <li><?php echo $line['task']; ?><span><a href="deletetask.php?task_id=<?php echo $line['task_id']; ?>"><i class="fa-solid fa-xmark"></i></a></span></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
</body>

</html>