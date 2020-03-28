

<?php
          
  if (isset($_POST['search'])) 
  {
    $id=$_POST['id'];
    $Present_days = $_POST['Present_days'];

    $connect=mysqli_connect("localhost","root","","mess_management_system");

    $query="SELECT Name,email,phonenumber,address,Present_days FROM user WHERE Id=$id";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    
    if (mysqli_num_rows($result) > 0) 
    {
      while ($row=mysqli_fetch_array($result)) 
      {
        $firstname=$row['Name'];
        $email=$row['email'];
        $phonenumber=$row['phonenumber'];
        $address=$row['address'];
        $Present_days=$row['Present_days'];
      }
    }
    
    else
    {

      echo "Undefined ID";
      $firstname="";
      $email="";
      $phonenumber="";
      $address="";
      $Present_days="";
    }
    
    mysqli_free_result($result);
    mysqli_close($connect);

  }
  
  else
  {

    $firstname="";
    $email="";
    $phonenumber="";
    $address="";
    $Present_days="";
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title> Existing User</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- <meta charset="utf-8"> -->
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
</head>
<body style="background:url(cutlery.jpg); background-size: 120% 120%; background-repeat: no-repeat;">
       <form action="exiregistration.php"  method="post">
        <div class="container">
           <div class="row">
            <div class=col-sm-3>
           <h1>Existing User</h1>
           <hr class="mb-3">
           <br>
          <b>Id:<input type="text" name="id"><br>
            Name:<input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>"> 
            Email:<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
            Mobile Number:<input type="text" class="form-control" name="phonenumber" value="<?php echo $phonenumber;?>">
            Address:<input type="text" name="address" class="form-control" value="<?php echo $address;?>">
            Total Present Days:<input type="int" name="Present_days" value="<?php echo $Present_days;?>"><br>
            Total Amount:<input type="int" name="amount" value="<?php echo floor($Present_days * 30)?>"></b>
            <hr class="mb-3">
             <input class="btn btn-primary" type="submit" name="search" value="Find">
         </div>
     </div>
 </div>
      </form>

</body>
</html>