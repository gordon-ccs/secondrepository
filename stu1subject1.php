<?php
	require('db.php');
	include ("filesLogic1.php");
	include ("filesLogic2.php");
	include ("filesLogic3.php");
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
						echo "Welcome! " . ($_SESSION['student']);
					?>
				</h2>
			</center>
				<h2>Cryptography</h2>
			<center>
		</table>
		<form>
		<tr>
			Please select a subject:
		</tr>
		<tr>
			<select name="Subject" onchange="location=this.value;">
				<option value="stuhome1.php">----Select subject---</option>
				<option value="stu1subject1.php">Cryptography</option>
				<option value="stu1subject2.php">Information Security Standard</option>
				<option value="stu1subject3.php">Critical Infrastructure</option>
			
			</select>
		</tr>
	</form><br><br>
		<table width="100%" border="5" style="border-collapse:collapse;">

		<tr><td>No</td><td>Homework</td><td>Due date</td><td>Remaining time</td><td>Description</td><td>Version 1</td><td>Version 2</td><td>Final version</td><td>Download</td></tr>


<?php
$count=1;
$sel_query="Select * from lect1subject1 ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["homework"]; ?></td>
<td align="center"><?php echo $row["duedate"]; ?></td>
<td align="center">
<?php
			$duedate=$row["duedate"];
			$targetDate = strtotime("$duedate"); // whatever your target date is
			$current=strtotime('now'); //setting current date
 
			$diffference =($targetDate-$current);//getting diffference between 2 date
 
			$days=floor($diffference / (60*60*24));
			if ($days>0){
				echo "$days days left";}
			else {
				echo "EXPIRED!";
			}
		?>
</td>
<td align="center"><?php echo $row["description"]; ?></td>
<td>
<center>

	
        <form action="stu1subject1.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile1"> <br>
          <button type="submit" name="save">upload</button>
        </form>
     
</center>
</td>
<td>
<center>

	  
        <form action="stu1subject1.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile2"> <br>
          <button type="submit" name="save" >upload</button>
        </form>
 
</center>
</td>
<td>
<center>

        <form action="stu1subject1.php" method="post" enctype="multipart/form-data" >
          <input type="file" name="myfile3"> <br>
          <button type="submit" name="save" >upload</button>
        </form>
   
</center>
</td>
<td>
<center>
	<button> <a href="downloads1.php">Download version 1</a></button><br>
	<button> <a href="downloads2.php">Download version 2</a></button><br>
	<button> <a href="downloads3.php">Download final version</a></button><br>
</center>
</td>
<?php $count++; } ?>
</tr>
</table>
</center>
<p>**ONLY FILES WITH '.zip', '.pdf', '.docx','.doc','.pptx','.xlsx' EXTENSION CAN BE UPLOAD TO THE SYSTEM.</P>

</body>
</html>
