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
			<a  href="Admin1.php">Registration</a>
			<a   href="lecturerlistforadmin.php">Lecturer</a>
			<a class="active" href="studentlistforadmin.php">Student</a>
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
						<h2>Student List</h2>
					</center>
				</td>
			</table>
		</form>
								
<table width="100%" border="5" style="border-collapse:collapse;">

<tr><td>No</td><td>Username</td><td>Email</td><td>Phone No</td><td>Course</td><td>Registered date</td></tr>


<?php
require('db.php');
$count=1;
$sel_query="Select * from student ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["phoneno"]; ?></td>
<td align="center"><?php echo $row["course"]; ?></td>
<td align="center"><?php echo $row["trn_date"]; ?></td>

<?php $count++; } ?>
</tr>
</table>
	</center>

</body>
</html>