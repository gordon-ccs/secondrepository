<?php
	
	session_start();
		if($_SESSION['admin']){
		}
		else
		{
		
			header("location: index.php");
		}
		$admin=$_SESSION['admin'];
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>FYP Project</title>
	<link rel="stylesheet" type="text/css" href="navbarstyle.css">	
</head>
<body>
	<div class="topnav">
			<a class="active" href="Admin1.php">Registration</a>
			<a  href="lecturerlistforadmin.php">Lecturer</a>
			<a href="studentlistforadmin.php">Student</a>
			<li style="float:right"><a href="logout.php">Logout</a></li>
	</div>
	<center>
		<table>
			<td>
				<img src="uthm2.jpg" alt="Trulli" width="200" height="100">
			</td>
			<td>
				<center>
					<h2>UNIVERSITY TUN HUSSIEN ONN MALAYSIA</h2>
					<h2>FACULTY SAINS KOMPUTER DAN TEKNOLOGI MAKLUMAT</h2>
					<h2>ONLINE ASSIGNMENT SUBMISSION AND MONITORING SYSTEM FOR LECTURERS AND STUDENTS</h2>
				</center>
			</td>
		</table>
			<h3>User Registration Page</h3><br>

		
		<button onclick="myFunction()">Register for lecturer</button>
			<script>
				function myFunction() 
				{
					location.replace("http://localhost/AssignmentSubmissionSystem/lectregistration.php")
				}
			</script><br><br>

		<button onclick="myFunction1()">Register for student</button>
			<script>
				function myFunction1() 
				{
					location.replace("http://localhost/AssignmentSubmissionSystem/sturegistration.php")
				}
			</script>

	</center>
</body>
</html>

