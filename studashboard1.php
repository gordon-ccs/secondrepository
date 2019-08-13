<?php
	require('db.php');
	session_start();
		if($_SESSION['student']){
		}
		else
		{
			header("location: index.php");
		}
		$student=$_SESSION['student'];
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>FYP Project</title>
	<link rel="stylesheet" type="text/css" href="navbarstyle.css">
</head>
<body>

		<div class="topnav">
			<a class="active" href="studashboard1.php">Dashboard</a>
			<a href="stuhome1.php">Homework</a>
			<a href="stucalender1.php">Calender</a>
			<a href="stuchangepassword.php">Change Password</a>
		
			<li style="float:right"><a href="logout.php">Logout</a></li>
		</div>
	<center>
		<form>
			<table>
				<td>
					<img src="uthm2.jpg" alt="Trulli" width="200" height="100">
				</td>
				<td>
					<center>
						<h2>UNIVERSITY TUN HUSSIEN ONN MALAYSIA</h2>
						<h2>FACULTY SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT</h2>
						<h2>ONLINE HOMEWORK SUBMISSION AND MONITORING SYSTEM FOR LECTURERS AND STUDENTS</h2>
						<h2>Student Information List</h2>
					</center>
				</td>
			</table>
		</form>
								
<h3>
<?php
$count=1;
$sel_query="Select * from student ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>


<tr>
<td>ID: </td><td align="center"><?php echo $count; ?></td></br>
<td>Username: </td><td align="center"><?php echo $row["username"]; ?></td></br>
<td>Email: </td><td align="center"><?php echo $row["email"]; ?></td></br>
<td>Phone no: </td><td align="center"><?php echo $row["phoneno"]; ?></td></br>
<td>Course: </td><td align="center"><?php echo $row["course"]; ?></td></br>
<?php $count++; } ?>
</tr></h3>


	</center>

</body>
</html>