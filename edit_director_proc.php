<?php 
	include"perfect_function.php";

	$table_name='add_director';

	$id=$_GET['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$account_status=$_POST['account_status'];

	$edited_user = array(
		"username"=>$username,
		"password"=>$password,
		"firstname"=>$firstname,
		"middlename"=>$middlename,
		"lastname"=>$lastname,
		"birthdate"=>$birthdate,
		"gender"=>$gender,
		"email"=>$email,
		"contact"=>$contact,
		"address"=>$address,
		"account_status"=>$account_status

	);  


	update($edited_user,$id,$table_name);
	header("location:directors_view.php");
	
	

 ?>
