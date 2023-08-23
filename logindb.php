<?php
session_start();
$connect=mysqli_connect("localhost","root","","tododb");
$email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['cpass'];
$sel="SELECT * FROM users_info WHERE email='$email' AND username='$username' AND password='$pass'";
$result=$connect->query($sel);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $_SESSION['userid']=$row['id'];
        $_SESSION['username']=$row['name'];
        header("location:todolist.php");
    }
}
else{
    ?>
    <script>
            alert("Please Enter Valid Credentials");
            window.location="login.html";
        </script>
    <?php
}
?>