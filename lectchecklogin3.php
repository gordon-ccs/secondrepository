<?php
session_start();
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$password=SHA1($_POST['password']);//hash for password

$captcha=$_POST['captcha'];

if($captcha==$_SESSION['captcha']['code'])
{
mysql_connect("localhost","root","")or die(mysql_error());//connect to server
mysql_select_db("fyp_1819")or die("cannot connect to database");//connect to database
$query=mysql_query("Select *from lecturer WHERE username='sofia'");
$exists=mysql_num_rows($query);
$table_lecturer="";
$table_password="";
if($exists>0)
{
while($row=mysql_fetch_assoc($query))
{
$table_lecturer=$row['username'];
$table_password=$row['password'];
}
if(($username==$table_lecturer)&&($password==$table_password))
{
if($password==$table_password)
{
$_SESSION['lecturer']=$username;
header("location:lecthome3.php");
}}
else
{
Print'<script>alert("Incorrect Password");</script>';
Print'<script>window.location.assign("lectlogin.php");</script>';
}}
else
{
Print'<script>alert("Incorrect Username");</script>';
Print'<script>window.location.assign("lectlogin.php");</script>';
}
}
else{
	Print'<script>alert("Incorrect Captcha! Please return back and try again.");</script>';
	Print'<script>window.location.assign("lectlogin.php");</script>';
}
?>

