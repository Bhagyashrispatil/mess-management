<!DOCTYPE html>
<html>
<head>
</head>
<style>  
        body
    {  
         
         background-image: url('wedding.jpg');
	  background-size: 110% 110%;
	background-repeat: no-repeat; 
	 
	 
      
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
        input[type=button] 
        {
    width: 10em;  height: 5em;
    font-family: verdana;  
            font-size: 40%;
            background-color: hotpink;
            color: white;
            border-radius: 40px;
            border-width: 5px;
            box-shadow: 5px 5px 5px 5px black;  
}
a{
 color: hotpink;
 font-size: 30px;
 display: inline-block;
 text-align: center;
 background-color: white;
}

 </style> 


<body>	
    <a href="logout.php" class="btn btn-danger">Logout</a>
<div style="margin-top: 130px;  
    margin-bottom: 100px;  
    margin-right: 340px;  
    margin-left: 0px; 
    font-size: 50px; ">
	<center><input type="button" onClick="parent.location='new.php'" value ="Add New User">
        <br>
        <br>
    <input type="button" onClick="parent.location='exiregistration.php'" value ="Existing User"></center>
    <br>
     <center><strong><input type="button" name="atten" onClick="parent.location='atten.php'" value ="Attendence"></strong></center>

</div>  
</body>
</html>
