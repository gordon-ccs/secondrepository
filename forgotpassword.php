<?php
session_start();

?>





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
			<h2>Forgot Password</h2>
			

				<div><?php if(isset($message)) { echo $message; } ?></div>
				<P>Please enter your email:</p><td></td>
			<form action="mail.php" method="post">
					Email:<input type="text" name="email">
							<input type="submit" name="submit" value="submit">
			</form>
			<br><br>
		
	</center>
</body>
</html>