<!DOCTYPE html>
<?php
require_once('config.php');
?>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background:url(cutlery.jpg); background-repeat: no-repeat;background-size: 110% 110%">
	<div>
		<?php
		if(isset($_POST['create'])){
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$address=$_POST['address'];

			$sql="INSERT INTO newuser (firstname,lastname,email,phonenumber,address) VALUES(?,?,?,?,?)";
			$stmtinsert=$db->prepare($sql);
			$result=$stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$address]);
                /*if(preg_match("/^\d+\.?\d*$/",$phonenumber) && strlen($phonenumber)==10){

                       echo 'Successfully saved';
                       $sql="INSERT INTO newuser (firstname,lastname,email,phonenumber,address) VALUES(?,?,?,?,?)";
			$stmtinsert=$db->prepare($sql);

                        $result=$stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$address]);
                             

                     }else{

                      echo 'please enter the valid mobile number';

                        }
                    
*/
		if($result)
			{
				echo 'Successfully saved';
			}
			else
			{
				echo 'There were errors while saving';
			}
		}
		?>
	</div>
	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
				<h1> Registration</h1>
				 <p> Fill up the form with correct values.</p>
				 <hr class="mb-3">
				 <label for="firstname"><b>First Name</b></label>
				 <input class="form-control" type="text" name="firstname" required>

				  <label for="lastname"><b>Last Name</b></label>
				 <input class="form-control" type="text" name="lastname" required>

				  <label for="email"><b>Email Address</b></label>
				 <input class="form-control" type="text" name="email" required>

				  <label for="phonenumber"><b>Mobile Number</b></label>
				 <input class="form-control" type="text" name="phonenumber" required>

				  <label for="address"><b>Address</b></label>
				 <input class="form-control" type="text" name="address" required>
                     
                     <label for="deducted days"><b>Deducted Days</b></label>
                     <input class="form-control" type="text" name="dd" id="dd">

                     <Input type="submit" value="Show All Records" name="Show" id="sub"/></td><td>
	                 <Input type="submit" value="Save" name="save" id="sub"/></td><td>
				 <!-- Deducted Days From Month:-<Input type="text" name="dd" id="dd"/> -->
                   <hr class="mb-3">
				 <input class="btn btn-primary" type="submit" name="create" value="Submit">
                  </div>
                 </div>
				
			</div>
			
		</form>
	</div>
   <table border="2" id="table">
<tr>
<th>ID</th>
<th>Name</th>
<th>Deducted Days</th>
<th>Total Days in Month</th>
</tr>
<?php
//$id=$_POST['id'];
//$name=$_POST['name'];
//$salary=$_POST['salary'];
if(isset($_POST['Show']))
{
	$sqli2="select * from user where Status='Active'";
		$queryi2=mysqli_query($con,$sqli2);
		while($rows=mysqli_fetch_array($queryi2))
		{
		echo '<tr>
		<td>'.$rows['Id'].'</td>
		<td>'.$rows['Name'].'</td>
		<td>'.$rows['Deducted_days'].'</td>
		<td>'.$rows['Total_days'].'</td></tr>';
		}
}	
if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$dd=$_POST['dd'];
		$month=date("n");
		$tot_d=cal_days_in_month(CAL_GREGORIAN,$month,2019);
		$cal_d=$tot_d-$dd;
		$sql2="insert into user(Name,Status,Deducted_days,Total_days,Present_days)values('$name','Active','$dd','$cal_d','0')";
		$query2=mysqli_query($con,$sql2);
	
		echo '<script>alert("Data is save");</script>';
	
		$sqli2="select * from user where Status='Active'";
		$queryi2=mysqli_query($con,$sqli2);
		while($rows=mysqli_fetch_array($queryi2))
		{
		echo '<tr>
		<td>'.$rows['Id'].'</td>
		<td>'.$rows['Name'].'</td>
		<td>'.$rows['Deducted_days'].'</td>
		<td>'.$rows['Total_days'].'</td></tr>';
		}
	
}
?>
</body>
</html>