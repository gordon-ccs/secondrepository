<?php
	date_default_timezone_set('Asia/Kuala_Lumpur');
	require('db.php');
	session_start();
	$status = "";
	if(isset($_POST['new']) && $_POST['new']==1)
	{
		$trn_date = date("Y-m-d H:i:s");
		$homework =$_REQUEST['homework'];
		$duedate = $_REQUEST['duedate'];
		$description=$_REQUEST['description'];
		$ins_query="insert into lect1subject1 (`trn_date`,`homework`,`duedate`,`description`) 
		values ('$trn_date','$homework','$duedate','$description')";
		mysqli_query($con,$ins_query) or die(mysqli_error($con));
	}
	if($_SESSION['lecturer']){
	}
		else
	{
		header("location: index.php");
	}
		$lecturer=$_SESSION['lecturer'];

?>

<html>
<head>
	<title>FYP Project</title>
	<link rel="stylesheet" type="text/css" href="navbarstyle.css">
</head>

<body>

	<div class="topnav">
			<a class="active" href="lecthome1.php">Homework</a>
			<a href="lectcalender1.php">Calender</a>
			<a href="lectchangepassword.php">Change Password</a>
			<a href="stulist.php">Student List</a>
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
				echo "Welcome!  " . ($_SESSION ['lecturer']);
			?>
		</h2>
			</td>
		</table>


		<div class="form">

		<div>
			<h1>Create Submission Platform</h1><br><br>

			<form name="form" method="post" action="">
			<input type="hidden" name="new" value="1" />
			Homework: <p><input type="text" name="homework"   placeholder="Homework" required /></p>
			Due Date: <p><input type="datetime-local" name="duedate" placeholder="Due date" required /></p>
			Description: <p><input type="text" name="description"   placeholder="Type your description" required /></p>

			<button name="submit" type="submit"  value="submit" onclick="myFunction()" >Create</button>
	</form>
		<p style="color:#FF0000;"><?php echo $status; ?></p>


		</div>
		</div>
		


<script>
function myFunction() {
  alert("Homework have been created!");
}
</script>



	</center>
</body>
</html>