<?php 	

	include"perfect_function.php";

	$table_name="add_event";

	$eventname=$_POST['eventname'];
	$eventdate=$_POST['eventdate'];
	$starttime=$_POST['starttime'];
	$endtime=$_POST['endtime'];


	$data= array(
		"eventname"=>$eventname,
		"eventdate"=>$eventdate,
		"starttime"=>$starttime,
		"endtime"=>$endtime
		);

	insert($data, $table_name);
	header("location: view_events.php");

 ?>