    <!doctype html>  
    <html>  
    <head>  
    <title>Login</title>  
        <style>   
     
      
            h3 {  
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
<FONT COLOR=#FFF size=4><center>JOINT ENTRANCE EXAMINATION (2017) (Main) </CENTER></FONT>
             <h3><FONT COLOR=#E6CE49><center>Central Board Of Secondary Education</CENTER></FONT></h3></div>
   <br>
   <h3><font color="purple"><center>Welcome to JEE Main 2017</center></font></h3>
     <h3><font color="purple"><center>Please login to take test</center></font></h3><br>
    <form action="" method="POST">  
    Username: <input type="text" name="user"><br />  <br/>
    Password: <input type="password" name="pass"><br />   <br/>
    <input type="submit" value="Login to take test" name="submit" />  
    </form>  
    <?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
      
        $con=mysqli_connect('localhost','root','') or die(mysql_error());  
        mysqli_select_db($con,'userpass') or die("cannot select DB");  
      
        $sql="SELECT * FROM table1 WHERE username='".$user."' AND password='".$pass."'";  
        $result=mysqli_query($con,$sql);  
        $numrows=mysqli_num_rows($result);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($result))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;  
      
        /* Redirect browser */  
        header("Location: qp.html");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  
    </body>  
    </html>   