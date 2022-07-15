<!DOCTYPE html>
<html>
<head>
<style>
h1{
    color:green;
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

</style>
</head>
<body>
<h1> <center> YOUR DATA HAS BEEN SUCCESSFULLY STORED IN THE WEBSITE </center> </h1>

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
$sub1=$_POST['s1'];
$sub2=$_POST['s2'];
$sub3=$_POST['s3'];
$sub4=$_POST['s4'];
$sub5=$_POST['s5'];
$sub6=$_POST['s6'];
$sub7=$_POST['s7'];
$sub8=$_POST['s8'];
$mark1=$_POST['m1'];
$mark2=$_POST['m2'];
$mark3=$_POST['m3'];
$mark4=$_POST['m4'];
$mark5=$_POST['m5'];
$mark6=$_POST['m6'];
$mark7=$_POST['m7'];
$mark8=$_POST['m8'];
$usn=$_POST['U'];
$sem=$_POST['s'];



$conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);}
    else{
        $stmt=$conn->prepare("insert into subjects(usn,sem,s1,m1,s2,m2,s3,m3,s4,m4,s5,m5,s6,m6,s7,m7,s8,m8)values(?,?,?, ?, ?, ?, ? ,? ,? ,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sisisisisisisisisi",$usn,$sem,$sub1,$mark1 ,$sub2 ,$mark2 ,$sub3 ,$mark3 ,$sub4 ,$mark4,$sub5,$mark5 , $sub6,$mark6 , $sub7 ,$mark7 ,$sub8,$mark8);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }

?>
