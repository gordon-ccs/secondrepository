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
			<a href="studashboard1.php">Dashboard</a>
			<a href="stuhome1.php">Homework</a>
			<a class="active" href="stucalender1.php">Calender</a>
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
						<h2>
							<?php
								 echo "Welcome!  " . ($_SESSION ['student']);  /*display username*/
							?>
						</h2>
					</center>
				</td>
			</table>
		</form>
	</center>
	<center>
		<iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%234285F4&amp;ctz=Asia%2FKuala_Lumpur&amp;src=Z29yZG9uaW5mb3NlY0BnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4ubWFsYXlzaWEjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230B8043" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
	</center>

</body>
</html>