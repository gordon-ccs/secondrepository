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
$query=mysql_query("Select *from lecturer WHERE username='$username'");
$exists=mysql_num_rows($query);
$table_lecturer="chuah";
$table_password="Chuah=123";
if($exists>0)
{
while($row=mysql_fetch_assoc($query))
{
$table_lecturer=$row['chuah'];
$table_password=$row['Chuah=123'];
}
if(($username==$table_lecturer)&&($password==$table_password))
{
if($password==$table_password)
{
$_SESSION['lecturer']=$username;
header("location:lecthome2.php");
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

