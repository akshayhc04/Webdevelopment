<!DOCTYPE html>
<html>
<head>
<style>
h1{
    color:red;
}
.button {
  display: flex;
  height: 50px;
  padding: 0;
  background: #009578;
  border: none;
  outline: none;
  border-radius: 5px;
  overflow: hidden;
  font-family: "Quicksand", sans-serif;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
}

.button:hover {
  background: #008168;
}

.button:active {
  background: #006e58;
}

.button__text,
.button__icon {
  display: inline-flex;
  align-items: center;
  padding: 0 24px;
  color: #fff;
  height: 100%;
}

.button__icon {
  font-size: 1.5em;
  background: rgba(0, 0, 0, 0.08);
}
.btn1{
    color:black;
    padding:30px;
    background:lightgreen;
    float:center;
    font:bold;
}
</style>
</head>
<body>
<h1> <center> USERNAME ADDED SUCCESSFULLY!!! </center> </h1>

<a href="logout.php"><center> <button type="button" class="button">
  <span class="button__text">Logout</span>
  <span class="button__icon">
  <ion-icon name="log-out-outline"></ion-icon>
  </span></center>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$conn = new mysqli('localhost','root','','test');
$s = "select * from register where username='$username'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num==1){
    
}
else if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);}
    else{
        $stmt=$conn->prepare("insert into register(firstname,lastname,username,password,cpassword)values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss",$firstname ,$lastname ,$username ,$password ,$cpassword);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

?>
