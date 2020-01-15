<?php 
	include"perfect_function.php";

	$table_name='staff';

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
	$status=$_POST['status'];
	$education=$_POST['education'];
	$account_status=$_POST['account_status'];
	$skills=$_POST['skills'];
	$profession=$_POST['profession'];
	$account_type=$_POST['account_type'];

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
		"account_status"=>$account_status,
		"account_type"=>$account_type,
		"education"=>$education,
		"profession"=>$profession,
		"skills"=>$skills,
		"status"=>$status

	);  


	update($edited_user,$id,$table_name);
	header("location:view_staff.php");
	echo "record uppdated";
	

 ?>
