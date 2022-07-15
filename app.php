<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>storemyresult</title>
<style>*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.table
{
    width:100%;
	height:500px;
	position:relative;
	margin:auto;
	background:rgba(4, 4, 4, 0.5);
	padding:10px;
    overflow: hidden;
    float:left;

}
.full-page
{
    height: 100vh;
	width:100%;
    background:aqua;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(https://c1.wallpaperflare.com/preview/79/806/473/book-business-drawing-education.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.labels{
    color:white;
}
.body{
    font-size:20px;
    font-family: sans-serif;
}
.fields{
    padding:10px;
    color:green;
}
.btn{
    color:blue;
    background:yellow;
    padding:30px;
    
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
<div class="full-page">
<div align="center">
<span class="head"><h1>SUBJECTS & MARKS INPUT PORTAL </h1></span>
<hr class="hr" />
<br>
<a href="logout.php"><center> <button type="button" class="button">
  <span class="button__text">Logout</span>
  <span class="button__icon">
  <ion-icon name="log-out-outline"></ion-icon>
  </span></center>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<div>
<form action="store.php" method="post" class="table">

<table border="5" cellpadding="5" cellspacing="5" class="design">

<tr><td colspan="5"align="center" ></td></tr>
<tr>
<th align="center"><td class="labels" ><b>USN</b> : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter USN" name="U" required /></td></th>
<th align="center"><td class="labels" ><b>SEM</b> : </td><td><input type="text" required="required" size="20" class="fields" placeholder="Enter SEM" name="s" required /></td></th>
</tr>
<tr>
<th><td class="labels"><b>Subject 1</b> : </td><td><input type="text" size="20" class="fields" placeholder="Enter Subject Name" name="s1" /></td></th>

<th><td class="labels"><b>marks</b> </td><td><input type="text"  size="20" class="fields" placeholder="Enter marks" name="m1" /></td></th>

<th><td class="labels"><b>Subject 5</b>:  </td><td><input type="text"  size="20" class="fields" placeholder="Enter Subject Name" name="s5" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text" size="20" class="fields" placeholder="Enter marks" name="m5" /></td></th>
</tr>
<tr>
<th><td class="labels"><b>Subject 2</b> : </td><td><input type="text" size="20" class="fields" placeholder="Enter Subject Name" name="s2" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text" size="20" class="fields" placeholder="Enter marks" name="m2" /></td></th>

<th><td class="labels"><b>Subject 6 </b>: </td><td><input type="text"size="20" class="fields" placeholder="Enter Subject Name" name="s6" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text" size="20" class="fields" placeholder="Enter marks" name="m6" /></td></th>
</tr>
<tr>
<th><td class="labels"><b>Subject 3</b> : </td><td><input type="text" size="20" class="fields" placeholder="Enter Subject Name" name="s3" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text"  size="20" class="fields" placeholder="Enter marks" name="m3" /></td></th>

<th><td class="labels"><b>Subject 7</b> : </td><td><input type="text" size="20" class="fields" placeholder="Enter Subject Name" name="s7" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text" size="20" class="fields" placeholder="Enter marks" name="m7" /></td></th>
</tr>
<tr>
<th><td class="labels"><b>Subject 4</b> : </td><td><input type="text"  size="20" class="fields" placeholder="Enter Subject Name" name="s4" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text" size="20" class="fields" placeholder="Enter marks" name="m4" /></td></th>

<th><td class="labels"><b>Subject 8</b> : </td><td><input type="text"  size="20" class="fields" placeholder="Enter Subject Name" name="s8" /></td></th>

<th><td class="labels"><b>marks</b>  </td><td><input type="text" size="20" class="fields" placeholder="Enter marks" name="m8" /></td></th>
</tr>

</table>
<th><tr colspan="2" align="center" color="green" ><input type="submit" class="fields" value="SAVE" /></tr></th>
</form>
<script type="text/javascript">
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
</body>
</html>
