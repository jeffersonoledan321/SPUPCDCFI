<?php 
	session_start();

	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'system');

	$name=$_POST['username'];
	$pass=$_POST['password'];

	$s="select * from staff where username='$name' && password='$pass'";
	$result=mysqli_query($con,$s);
	$num = mysqli_num_rows($result);
	$acct_type = $result->fetch_assoc();
	if ($num==1) {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['acct_type'] = $acct_type['account_type'];
		header("location: blank.php");
		
	}else{
		
		header("location: login.php");
		die();
	}
 ?>