<?php 
	include"perfect_function.php";

	$table_name='add_event';

	$id=$_GET['id'];
	$eventname=$_POST['eventname'];
	$eventdate=$_POST['eventdate'];
	$starttime=$_POST['starttime'];
	$endtime=$_POST['endtime'];
	

	$edited_event = array(
		"eventname"=>$eventname,
		"eventdate"=>$eventdate,
		"starttime"=>$starttime,
		"endtime"=>$endtime
	
	);  


	update($edited_event,$id,$table_name);
	header("location:view_events.php");
	
	

 ?>
