<?php
	session_start();
	$adminname=mysql_real_escape_string($_POST['adminname']);
	$password=mysql_real_escape_string($_POST['password']);
	$bool=true;
	mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("fyp_1819")or die("cannot connect to database");
	$query=mysql_query("Select *from admin WHERE adminname='$adminname'");
	$exists=mysql_num_rows($query);
	$table_admin="admin";
	$table_password="Admin=123";
	if($exists>0)
		{
			while($row=mysql_fetch_assoc($query))
		{
			$table_admin=$row['adminname'];
			$table_password=$row['password'];
		}
	if(($adminname==$table_admin)&&($password==$table_password))
		{
		if($password==$table_password)
			{
			$_SESSION['admin']=$adminname;
			header("location:Admin1.php");
			}
		}
		else
		{
			Print'<script>alert("Incorrect Adminname or Password");</script>';
			Print'<script>window.location.assign("adminlogin.php");</script>';
		}
		}
?>