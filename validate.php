<?php
$username=$_POST['username'];
$password=$_POST['password'];

$conn = new mysqli('localhost','root','','test');
$s = "select * from register where username='$username' && password='$password'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num==1){
  header('location:app.php');
}
else
    header('location:loginandregister.php')


?>