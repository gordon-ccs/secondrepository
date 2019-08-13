<!--Simple Captcha Session code-->
<?php
	session_start();
	include("simple-php-captcha.php");
	$_SESSION['captcha'] = simple_php_captcha();
	
?>
<!--End simple captcha code-->


<!DOCTYPE html>
<html>
<head>
	<title>FYP Project</title>
</head>
<body>
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
			<h2>Student Login Page</h2>
			<h3>For first time login,</h3>
			<h3>Lecturer: Use your staff id as username and ic as password</h3>
			<h3>Student: Use your matric no as username and ic as password</h3>
			<form action="stuchecklogin1.php" method="post">
				Username: <input type="text" name="username" required="required"/></br></br>
				Password: <input type="password" name="password" required="required" id="myInput"/></br></br>
				<input type="checkbox" onclick="myFunction()">Show Password</br></br>
				
					<!--start captcha code-->
					<tr>
						<td>Captcha</td>
						<td>:</td>
						<td><input type="text" name="captcha" required="required"></td>
					</tr>
					<td></td>
					<td></td></br></br>
					<td>
					<?php 
						echo'<img src="'.$_SESSION['captcha']['image_src'].'"alt="CAPTCHA code">';
					?>
					</tr></br></br>
					<!--End of Captcha code-->
				
				
				
				<input type="submit" value="Login"/>
				<input type="reset" value="Reset"/>
			</form>

	</center>
</body>
</html>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>