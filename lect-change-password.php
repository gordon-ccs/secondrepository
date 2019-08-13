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
		
		$conn_db = mysql_connect("localhost","root","") or die();
		$sel_db = mysql_select_db("fyp_1819",$conn_db) or die();
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$old_pass=md5($old_pass);
		$new_pass=md5($new_pass);
		$re_pass= md5 ($re_pass);
		$chg_pwd=mysql_query("select * from lecturer where username='$lecturer' ");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		
		if($old_pass==$data_pwd){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update lecturer set password='$new_pass',cpass='$re_pass' where username='$lecturer'");
			echo "<script>alert('Update Sucessfully'); window.location='lectchangepassword.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='lectchangepassword.php'</script>";
		}
		}
		else
		{
			var_dump($data_pwd);
		var_dump($old_pass);
		echo "<script>alert('Your old password is wrong'); window.location='lectchangepassword.php'</script>";
		}}
	?>