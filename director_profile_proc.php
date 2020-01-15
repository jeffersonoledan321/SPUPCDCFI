<?php 
	include"perfect_function.php";

	$table_name='add_director';


	$id=$_GET['id'];

	$profession=$_POST['profession'];

	$edited_user = array(
		
		"profession"=>$profession

	);  


	update($edited_user,$id,$table_name);
	header("Location:director_profile.php?id=".$id);
	
	

 ?>
