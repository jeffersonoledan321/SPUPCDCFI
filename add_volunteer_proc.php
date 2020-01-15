<?php 
	include"perfect_function.php";

	//table name
	$table_name="add_volunteer";
	//get data from the form put inside the variable
	
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
	$education=$_POST['educ'];
	$skills=$_POST['skills'];
	$profession=$_POST['profession'];

	//insert data gathered data inside the database
	//array format

	$data = array(
		
		"firstname"=>$firstname,
		"middlename"=>$middlename,
		"lastname"=>$lastname,
		"birthdate"=>$birthdate,
		"gender"=>$gender,
		"email"=>$email,
		"contact"=>$contact,
		"address"=>$address,
		"account_status"=>$account_status,
		"status"=>$status,
		"education"=>$education,
		"profession"=>$profession,
		"skills"=>$skills

	);

	insert($data,$table_name);

	header("location:volunteer_view.php");


 ?>