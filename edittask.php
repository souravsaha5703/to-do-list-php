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
            <ul id="links">
                <li><a href="todolist.php">Home</a></li>
                <li><a href="#">Tasks</a></li>
                <a href="logout.php" id="logout">Logout</a>
            </ul>
            <i class="fa-solid fa-bars" id="menu"></i>
        </div>
    </nav>
    <div class="content container">
        <div class="input">
            <?php
            $connection=mysqli_connect("localhost","root","","tododb");
            $edittask=$_GET['task_id'];
            $select="SELECT * FROM list_table WHERE task_id='$edittask'";
            $res=$connection->query($select);
            while($line=$res->fetch_assoc()){
             ?>
            <form action="updatetask.php" method="post">
                <input type="hidden" name="editid" value="<?php echo $line['task_id'] ?>">
                <input type="text" name="task" id="input-task" placeholder="Enter your task" value="<?php echo $line['task']?>" >
                <input type="submit" value="Add Task" id="task-submit">
            </form>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/e04331d407.js" crossorigin="anonymous"></script>
    <script>
        const itag=document.getElementById("menu");
        const links=document.getElementById("links");
        itag.addEventListener('click',()=>{
            links.classList.toggle('active');
        })
    </script>
</body>

</html>