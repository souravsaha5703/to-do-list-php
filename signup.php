<?php
$connect=mysqli_connect("localhost","root","","tododb");
$name=$_POST['fname'];
$email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['cpass'];
$add="INSERT INTO users_info SET name='$name',email='$email',username='$username',password='$pass'";
$connect->query($add);
header("location:todolist.php");
?>