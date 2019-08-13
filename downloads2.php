<?php
	include 'filesLogic2.php';
	
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
			
			<a class="active" href="stuhome1.php">Assignment</a>
			<a href="stucalender1.php">Calender</a>
			<a href="stuchangepassword.php">Change Password</a>
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
				echo "Welcome!  " . ($_SESSION ['student']); /*display username*/
			?>
		</h2>
		</table><br><br>

	
	</center>
	<center>
		<table width="50%" border="3" style="border-collapse:collapse;">

		<tr><td>ID</td><td>Filename</td><td>size (in mb)</td><td>Download</td><td>Action</td></tr>
		
			<tbody>
				<?php foreach ($files as $file): ?>
					<tr>
						<td><?php echo $file['id']; ?></td>
						<td><?php echo $file['name']; ?></td>
						<td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
						<td><?php echo $file['downloads']; ?></td>
						<td><a href="downloads2.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
					</tr>
				<?php endforeach;?>

			</tbody>
		</table>
	</center>

</body>
</html>