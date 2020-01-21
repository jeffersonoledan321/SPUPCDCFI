<?php 
	include"perfect_function.php";

	//table name
	$table_name="add_director";
	//get data from the form put inside the variable
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
	$status=$_POST['status'];

	//insert data gathered data inside the database
	//array format

	$data = array(
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
		"status"=>$status
	);

	insert($data,$table_name);

	header("location:directors_view.php");


 ?>