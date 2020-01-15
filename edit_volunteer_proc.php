<?php 
	include"perfect_function.php";

	$table_name='add_volunteer';

	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$birthdate=$_POST['birthdate'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$account_status=$_POST['account_status'];
	$status=$_POST['status'];

	$edited_user = array(
	
		"firstname"=>$firstname,
		"middlename"=>$middlename,
		"lastname"=>$lastname,
		"birthdate"=>$birthdate,
		"gender"=>$gender,
		"email"=>$email,
		"contact"=>$contact,
		"address"=>$address,
		"account_status"=>$account_status,
		"status"=>$status

	);  


	update($edited_user,$id,$table_name);
	header("location:volunteer_view.php");
	
	

 ?>
