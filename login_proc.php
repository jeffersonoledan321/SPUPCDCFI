<?php 
	session_start();

	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'system');

	$name=$_POST['username'];
	$pass=$_POST['password'];

	$s="select * from staff where username='$name' && password='$pass'";
	$result=mysqli_query($con,$s);
	$num = mysqli_num_rows($result);
	if ($num==1) {
		header("location: blank.php");
		
	}else{
		
		header("location: login.php");
	}
 ?>