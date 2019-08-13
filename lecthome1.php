<?php
	require('db.php');
	session_start();
		if($_SESSION['lecturer']){
		}
		else
		{
		
			header("location: index.php");
		}
		$lecturer=$_SESSION['lecturer'];
	

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>FYP Project</title>
	<link rel="stylesheet" type="text/css" href="navbarstyle.css">
</head>
<body>

		<div class="topnav">
			
			<a class="active" href="lecthome1.php">Assignment</a>
			<a href="lectcalender1.php">Calender</a>
			<a href="lectchangepassword.php">Change Password</a>
			<a href="stulist.php">Student List</a>
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
						<h2>ONLINE ASSIGNMENT SUBMISSION AND MONITORING SYSTEM FOR LECTURERS AND STUDENTS</h2>
						<h2>
							<?php
								echo "Welcome!  " . ($_SESSION ['lecturer']);
							?>
						</h2>
					</center>
				</td>
			</table>
		</form>
	</center>
	<center>
	<form>
		<tr>
			Please select a subject:
		</tr>
		<tr>
			<select name="Subject" onchange="location=this.value;">
				<option value="lecthome1.php">----Select subject---</option>
				<option value="lect1subject1.php">Cryptograhy</option>
				<option value="lect1subject2.php">Information Security Standard</option>
				<option value="lect1subject3.php">Critical Infrastructure</option>

			</select>
		</tr>
	</form><br><br>
	</center>
</body>
</html>