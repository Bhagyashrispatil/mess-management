<?php
$con=mysqli_connect('localhost','root','','mess_management_system');
if(!$con)
{
	die("Error".mysqli_connect_error());
}
?>
<html>
<head>
<style>
		#l{
			height:90px;
			width:450px;
			padding: 2%;
			border-radius:5%;
			background-color: lightblue;
			color: white;
		}
		#m{
			Padding:2%;
			border-radius:5%;
			background-color: white;
			border: 6px solid lightblue;
		}
		#sub {
				border-radius: 5%;
				background-color:blue;
				color: white;
			}
</style>
<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script>
	$(document).ready(function() {
		$("#id").prop("disabled", true);
		});
</script>
<script>
</script>
</head>
<body>
<center>
<div id="m">
<div id="l">
<form method="post">
	<b>ID:-<Input type="text" name="id" id="id" value="0"/><br><br>
	Name:-<Input type="text" name="name" id="name"/><br><br>
	Deducted Days From Month:-<Input type="text" name="dd" id="dd"/>
	</div><br><br>
	<table>
	<tr><td>
	<Input type="submit" value="Show All Records" name="Show" id="sub"/></td><td>
	<Input type="submit" value="Save" name="save" id="sub"/></td><td>
	<!-- <Input type="submit" value="Update" name="update" id="sub"/></td><td>
	<Input type="submit" value="Deactive" name="deactive" id="sub"/></td></tr><br> -->
	<Input type="submit" value="Take Attendance" name="take" id="sub"/>
	</table>
	<br><br>
</form>

<table border="2" id="table">
<tr>
<th>ID</th>
<th>Name</th>
<th>Deducted Days</th>
<th>Total Days in Month</th>
</tr>
<?php
if(isset($_POST['take']))
{
	header("location:atten.php");
}

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
/*if(isset($_POST['update']))
{    
	//$id='';
	$id=$_POST['id'];
	//$name=$_POST['name'];
	$dd=$_POST['dd'];
	
	
		$sql2="UPDATE user set Deducted_days='$dd' where Id='$id'";
		$query2=mysqli_query($con,$sql2);
		
		echo '<script>alert("Data is Updated");</script>';
		
		$sqli2="SELECT * from user where Status='Active'";
		$queryi2=mysqli_query($con,$sqli2)or die(mysqli_error($con));
		while($rows=mysqli_fetch_array($queryi2))
		{
		echo '<tr>
		<td>'.$rows['Id'].'</td>
		<td>'.$rows['Name'].'</td>
		<td>'.$rows['Deducted_days'].'</td>
		<td>'.$rows['Total_days'].'</td></tr>';
		}	
	
}

if(isset($_POST['deactive']))
{
	
	//$name=$_POST['name'];
	//$salary=$_POST['salary'];
		$id1=$_POST['id'];
		$sql2="UPDATE user set Status='Deactive' where Id='$id1'";
		$query2=mysqli_query($con,$sql2);
	
		echo '<script>alert("Data is delete");</script>';
	
		$sqli2="SELECT * from user where Status='Active'";
		echo "enter";
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
*/
?>
</table>
</div>
</center>
<script>


//show data on form from table
var table=document.getElementById('table'),rIndex;

for(var i=1;i<table.rows.length;i++)
{
	table.rows[i].onclick=function()
	{
		rIndex=this.rowIndex;
        document.getElementById("id").value=this.cells[0].innerHTML;
		document.getElementById("name").value=this.cells[1].innerHTML;
		document.getElementById("dd").value=this.cells[2].innerHTML;
	
		//to see the result on console panel
		//console.log(rIndex);
	};
}
</script>

</body>
</html>