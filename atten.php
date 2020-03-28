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
		$("#id").prop("disabled", false);
		$("#prt_d").prop("disabled", false);
		});
</script>
</head>
<body style="background:url(cutlery.jpg); background-repeat: no-repeat;background-size: 100% 100%">
<center>
<div id="m">
<form method="post">
<b>ID:-<Input type="text" name="id" id="id" value="0"/><br><br>
Present_days:-<Input type="text" name="prt_d" id="prt_d"/><br><br>
<Input type="submit" value="Submit" name="submit" id="sub"/>
<Input type="submit" value="Show Student List" name="show" id="sub"/>
<Input type="submit" value="back" name="back" id="sub"/>
<table border="2" id="table">
<tr>
<th>ID</th>
<th>Name</th>
<th>Deducted Days</th>
<th>Total Days in Month</th>
<th>Present Days</th>

</tr>
<?php
	if(isset($_POST['back']))
{
	header("location:mainpage.php");
}

if(isset($_POST['show']))
	{
	$sqli2="select * from user where Status='Active'";
		$queryi2=mysqli_query($con,$sqli2);
		while($rows=mysqli_fetch_array($queryi2))
		{
		echo '<tr>
		<td>'.$rows['Id'].'  </td>
		<td>'.$rows['Name'].'</td>
		<td>'.$rows['Deducted_days'].'</td>
		<td >'.$rows['Total_days'].'</td>
		<td>'.$rows['Present_days'].'</td></tr>';
		
		}
	}

	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$prt_d=$_POST['prt_d'];
		$prt_d=$prt_d+1;
		$sql2="update user set Present_days='$prt_d' where Id='$id'";
		$query2=mysqli_query($con,$sql2);
			echo '<script>alert("Attendance is marked");</script>';
			$sqli2="select * from user where Status='Active'";
		$queryi2=mysqli_query($con,$sqli2);
		while($rows=mysqli_fetch_array($queryi2))
		{
		echo '<tr>
		<td>'.$rows['Id'].'  </td>
		<td>'.$rows['Name'].'</td>
		<td>'.$rows['Deducted_days'].'</td>
		<td >'.$rows['Total_days'].'</td>
		<td>'.$rows['Present_days'].'</td></tr>';
		}
		
	}
	
?>
</table>
</form>
<script>


//show data on form from table
var table=document.getElementById('table'),rIndex;

for(var i=1;i<table.rows.length;i++)
{
	table.rows[i].onclick=function()
	{
		rIndex=this.rowIndex;
        document.getElementById("id").value=this.cells[0].innerHTML;
		document.getElementById("prt_d").value=this.cells[4].innerHTML;
		
	
		//to see the result on console panel
		//console.log(rIndex);
	};
}
</script>
</div>
</body>
</html>
