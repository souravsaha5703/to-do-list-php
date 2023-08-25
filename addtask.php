<?php
session_start();
$connection=mysqli_connect("localhost","root","","tododb");
$task=$_POST['task'];
$user=$_SESSION['userid'];
$query="SELECT * from users_info WHERE id='$user'";
$res=$connection->query($query);
$row=$res->fetch_assoc();
$id=$row['id'];

$inserttask="INSERT INTO list_table SET task='$task',user_id='$id'";
$connection->query($inserttask);
header("location:todolist.php");
?>