<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body
    {  
         
         background-image: url('login.jpg');
	  
	background-repeat: no-repeat; 
	background-size:cover; 
	 margin-top: 250px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 750px; 
	font-size: 50px; 
	padding-bottom: :10px; 
      
    color: black;  
    font-family: Adobe;  
    font-size: 150%  
      
        }  
           
        h3 
        {  
        	
	 		
		    color: indigo;  
		    font-family: verdana;  
		    font-size: 100%;  
		}
 </style>  
</head>  
<body>  
       
   
<h3>Login Form</h3>  
<form action="" method="POST">  
Username: <input type="text" name="user">
<br /> 
<br> 
Password: <input type="password" name="pass">
<br /> 
<br>  
<b><input class="btn btn-primary" type="submit" value="Login" name="submit" ></b>

</form>  
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('mess_management_system') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: mainpage.php");  
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