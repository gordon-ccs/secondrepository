<!DOCTPYE>
<?php
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
//header('Content-Security-Policy: default-src ');
?>
<html>
<head>
	<title>FYP Project</title>
	
</head>
<body>
	<center>
		<h2> Hello World!</h2>
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
		
		<h3>This is an online assignment submission and monitoring system for lecturers and students in FSKTM,UTHM. </h3>
		<h3>For first time login,</h3>
		<h3>Lecturer: Use your staff id as username and ic as password</h3>
		<h3>Student: Use your matric no as username and ic as password</h3>
		<h2>*User are required to change their password during their first login*</h2>


			<button onclick="myFunction2()">Login as lecturer</button>

			<script>
				function myFunction2() {
						location.replace("lectlogin.php")
				}
			</script><br><br>

			<button onclick="myFunction3()">Login as student</button>

			<script>
				function myFunction3() {
						location.replace("stulogin.php")
				}
			</script><br><br>
			
			<button onclick="myFunction4()">Login as admin</button>

			<script>
				function myFunction4() {
						location.replace("adminlogin.php")
				}
			</script>
			

</body>
</html>
