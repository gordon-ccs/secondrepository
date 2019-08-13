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
			
			<a class="active" href="stuhome1.php">Assignment</a>
			<a href="stucalender1.php">Calender</a>
			<a href="stuchangepassword.php">Change Password</a>
			<li style="float:right"><a href="logout.php">Logout</a></li>
	</div>
	<center>
		<table>
			<td>
				<img src="uthm2.jpg" alt="Trulli" width="200" height="100">
			</td>
			<td>
	</center>
	<center>
		<h2>UNIVERSITY TUN HUSSIEN ONN MALAYSIA</h2>
		<h2>FACULTY SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT</h2>
		<h2>ONLINE HOMEWORK SUBMISSION AND MONITORING SYSTEM FOR LECTURERS AND STUDENTS</h2>
		<h2>
			<?php
				echo "Welcome!  " . ($_SESSION ['student']); /*display username*/
			?>
		</h2>
		</table><br><br>

	<form>
		<tr>
			Please select a subject:
		</tr>
		<tr>
			<select name="Subject" onchange="location=this.value;">
				<option value="stuhome1.php">----Select subject---</option>
				<option value="stu1subject1.php">Cryptography</option>
				<option value="stu1subject2.php">Information Security Standard</option>
				<option value="stu1subject3.php">Critical Infrastructure</option>

			</select>
		</tr>
	</form>
	</center>

</body>
</html>