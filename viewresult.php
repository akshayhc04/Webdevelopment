<?php   
 $conn=mysqli_connect("localhost","root","","test"); //database connection  

 $usn=$_POST['usn'];
 $sem=$_POST['sem'];
  
 $query="select * from subjects where usn='$usn' and sem='$sem'";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
 ?>   
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title> STOREmyRESULTS</title> 
      <script src="js/jquery.min.js"></script>
 
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color:black;  
           }  
           .container{  
                max-width: 1200px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color:#2fff2f;  
                color: black;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: white;  
                font-size: 1em;  
                text-align: center;  
           } 
           h1{
            color:yellow;
            text-align:center;
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
           /* 
           table tr:nth-child(odd){  
                background-color: #797676;  
           } */ 

</style>
<script src="pdf.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
 </head>  
 <body> 
     <div> <div>
 <div class="container" id="table">
    <h1> StoremyResults </h1>
      <table border="10">   
           <tr> 
        
                <th>USN</th>  
                <th>SEM</th>
                <th>SUBJECT</th>
                <th> MARKS </th>       
           </tr>  
           <?php  
                if($usn>0) {  
                    while($data=mysqli_fetch_assoc($connect)){ 
                     print"       
                               <tr>  
                               <td>".$data['usn']."</td>  
                               <td>".$data['sem']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td> 
                               <td>".$data['s1']."</td>  
                               <td>".$data['m1']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s2']."</td>  
                               <td>".$data['m2']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s3']."</td>  
                               <td>".$data['m3']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s4']."</td>  
                               <td>".$data['m4']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s5']."</td>  
                               <td>".$data['m5']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s6']."</td>  
                               <td>".$data['m6']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s7']."</td>  
                               <td>".$data['m7']."</td>
                               </tr>
                               <tr>
                               <td></td><td></td>
                               <td>".$data['s8']."</td>  
                               <td>".$data['m8']."</td>  
                               </tr>  
                       ";     
                     }  
                }  
           ?>  
      </table> <br>
      <button type="button" class="button" id="download">
  <span class="button__text">Download as PDF</span>
  <span class="button__icon">
  <ion-icon name="download-outline"></ion-icon>
  </span>
</button>
            </br>
               </div>
          </div>
               <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<a href="logout.php"><center> <button type="button" class="button">
  <span class="button__text">Logout</span>
  <span class="button__icon">
  <ion-icon name="log-out-outline"></ion-icon>
  </span></center>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 </body>  
 </html> 
