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
			<a href="lectdashboard1.php">Dashboard</a>
			<a class="active" href="lecthome1.php">Assignment</a>
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
					<h2>ONLINE ASSIGNMENT SUBMISSION AND MONITORING SYSTEM FOR LECTURERS AND STUDENTS</h2>
					<h2>
						<?php
							echo "Welcome!  " . ($_SESSION ['lecturer']);
						?>
					</h2>
				</center>
				<h2>Information Security Standard</h2>
	<center>
		</table>
			</td>
			
			<form>
				<tr>
					Please select a subject:
				</tr>
				<select name="Subject" onchange="location=this.value;">
					<option value="lecthome1.php">----Select subject---</option>
				<option value="lect1subject1.php">Cryptograhy</option>
				<option value="lect1subject2.php">Information Security Standard</option>
				<option value="lect1subject3.php">Critical Infrastructure</option>
			
				</select>
			</form><br><br>

		
		<table width="100%" border="5" style="border-collapse:collapse;">

		<tr><td>No</td><td>Assignment</td><td>Due date</td><td>Description</td><td>Progress</td></tr>


		<?php
			$count=1;
			$sel_query="Select * from lect1subject1 ORDER BY id desc;";
			$result = mysqli_query($con,$sel_query);
			while($row = mysqli_fetch_assoc($result)) { ?>

			<tr>
				<td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["assignment"]; ?></td>
				<td align="center"><?php echo $row["duedate"]; ?></td>
				<td align="center"><?php echo $row["description"]; ?></td>
				<td>
			<center>
				<button onclick="myFunction1()">View</button>
					<script>
						function myFunction1() {
						location.replace("http://localhost/AssignmentSubmissionSystem/sub1progress1.php")
							}
						<!--<a href="progress.php" class="btn btn-info">Show Uploaded Files</a>
					</script>
			</center>
				</td>
				<?php $count++; } ?>
			</tr>
			</table>
				<button onclick="myFunction()">Create Submission Platform</button>

			<script>
				function myFunction() {
				location.replace("http://localhost/AssignmentSubmissionSystem/lect1submissionplatform1.php")
				}
			</script>


</center>
</body>
</html>