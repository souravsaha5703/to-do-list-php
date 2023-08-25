<?php
$connection=mysqli_connect("localhost","root","","tododb");
$taskid=$_GET['task_id'];
$del="DELETE FROM list_table WHERE task_id='$taskid'";
$connection->query($del);
header("location:todolist.php");
?>