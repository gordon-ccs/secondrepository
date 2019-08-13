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
	<link rel="stylesheet" type="text/css" href="password.css">
</head>
<body>

		<div class="topnav">
			<a href="studashboard1.php">Dashboard</a>
			<a href="stuhome1.php">Homework</a>
			<a href="stucalender1.php">Calender</a>
			<a class="active" href="stuchangepassword.php">Change Password</a>
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
								echo "Welcome!  " . ($_SESSION ['student']); /*display username*/
							?>
						</h2>
					</center>
				</td>
			</table>
		</form>
	</center>
	<center>
	<h3>Change Password</h3></br></br>
	<div style="width:30%;">
<form method="post" action="stu-change-password.php">
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">Old Password: </label></br>
    <input type="password" class="form-control" name="old_pass" id="exampleInputPassword1" placeholder="Insert Old Password">
  </div></br>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">New Password: </label></br>
    <input type="password" class="form-control" name="new_pass" id="exampleInputPassword1" placeholder="Insert New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
					required="required">
  </div></br>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:blue;">Re-Type New Password: </label></br>
    <input type="password" class="form-control" name="re_pass" id="exampleInputPassword1" placeholder="Re-Type New Password">
  </div>
  </br></br>
  <button type="submit" name="re_password" class="btn btn-primary"><i class="glyphicon glyphicon-save"></i> Submit</button>
</form>
</div>
	</center>
	

</body>
</html>
<script>
var myInput = document.getElementById("exampleInputPassword1");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>