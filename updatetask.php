<?php
 $connection=mysqli_connect("localhost","root","","tododb");
 $idtask=$_POST['editid'];
 $utask=$_POST['task'];
 $update="UPDATE list_table SET task='$utask' WHERE task_id='$idtask'";
 $connection->query($update);
 header("location:todolist.php");
?>