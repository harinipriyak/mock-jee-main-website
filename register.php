<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>   

            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}
.container-fluid{
            
            background-image: url("redback.jpg");
            width:100%;
            height:100px;
            font-weight: bold;
}

</style>  
</head>  
<body>  
     
<div class="container-fluid"><br>
  <h1>  <FONT COLOR=#FFF><center>JOINT ENTRANCE EXAMINATION (2017) (Main) </CENTER></FONT></h1>
             <h2><FONT COLOR=#E6CE49><center>Central Board Of Secondary Education</CENTER></FONT></h2></div>
   <br>
   <h1><font color="purple"><center>Create login passoword for taking test</center></font></h1>
<form action="" method="POST">  
  
     
          
Username: <input type="text" name="user"><br />  <br/>
Password:  <input type="password" name="pass"><br />   <br/>
<input type="submit" value="Register" name="submit" />  
              
       
</form>  

<br/>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Upload Image  :
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<br/>

<form action="sign.php" method="post" enctype="multipart/form-data">
    Upload signature:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Sign" name="submit">
  
</form>


<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'userpass') or die("cannot select DB");  
  
    
    $sql="INSERT INTO table1(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "Upload photo and signature!";  
    } else {  
    echo "Failure!";  
    }  
  
   
  
} else {  
    echo "All fields are required!";  
}  
}  

?>  
<BR>
</CENTER><a href="ex1-3.html"><h2>GO TO HOME</H2></A></CENTER>
<br/>
</body>  
</html>  