<?php
	date_default_timezone_set('Asia/Kuala_Lumpur');
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
			<h3>Student Registration Page</h3><br><br>
	<div class="form">
	<form name="registration" action="sturegistration.php" method="post">
		Username: <br><input type="text" name="username" required="required"/><br>
		Default Password: <br><input type="password" name="password" required="required" id="myInput"/></br><input type="checkbox" onclick="myFunction()">Show Password</br></br>
		Confirm Password: <br><input type="password" name="cpass" required="required" id="myInput1"/></br><input type="checkbox" onclick="myFunction1()">Show Password</br></br>
		Email: <br><input type="email" name="email" required="required"/><br>
		Phone no: <br><input type="text" name="phoneno" required="required"/><br>
		Course: <br><input type="text" name="course" required="required"/><br><br>
		<input type="submit" value="Register"/>  <input type="reset" value="Reset">
	</form>
	</div>
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
function myFunction1() {
  var y = document.getElementById("myInput1");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>


<?php
	require('db.php');

	
	
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$phoneno = stripslashes($_REQUEST['phoneno']);
		$phoneno = mysqli_real_escape_string($con,$phoneno);
		$course = stripslashes($_REQUEST['course']);
		$course = mysqli_real_escape_string($con,$course);
		$trn_date = date("Y-m-d H:i:s");
		$bool=true;
		
		
		mysql_connect("localhost","root","")or die("Cannot connect");//connect server
		mysql_select_db("fyp_1819")or die("Cannot connect to database");//connect database
		$query=mysql_query("Select* from student");
		while($row=mysql_fetch_array($query))

		{
		
			$table_student=$row['username'];
				if($username==$table_student)
				{
					$bool=false;
					Print '<script>alert("Username has been taken!");</script>';
					Print '<script>window.location.assign("sturegistration.php");</script>';
				}
			
		}
		if ($_POST['password']!==$_POST['cpass']) {

			Print '<script>alert("Your password did not match!");</script>';
			Print '<script>window.location.assign("sturegistration.php");</script>';
		}
		else if($bool)
			{
				$encrypted_password=SHA1($password);//hash for password
				
				mysql_query("INSERT INTO student(username,password,email,phoneno,course,trn_date)
				VALUES('$username','$encrypted_password','$email','$phoneno','$course','$trn_date')");
				Print '<script>alert("Successful Registered!");</script>';
				Print '<script>window.location.assign("Admin1.php");</script>';
			}
	}
?>

