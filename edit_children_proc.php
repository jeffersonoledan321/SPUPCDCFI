<?php 
	include"perfect_function.php";

	$table_name='qrcodes';

	$id=$_GET['id'];
	$qrImg=$_POST['qrImg'];
	$qrlink=$_POST['qrlink'];
	$photo=$_POST['photo'];
	$qrfirstname=$_POST['qrfirstname'];
	$qrmiddlename=$_POST['qrmiddlename'];
	$qrlastname=$_POST['qrlastname'];
	$qrbirthdate=$_POST['qrbirthdate'];
	$qrgender=$_POST['qrgender'];
	$qrbloodtype=$_POST['qrbloodtype'];
	$qrfathersname=$_POST['qrfathersname'];
	$qrmothersname=$_POST['qrmothersname'];
	$qrcontactperson=$_POST['qrcontactperson'];
	$qraddress=$_POST['qraddress'];
	$qraccountstatus=$_POST['qraccountstatus'];

	$edited_user = array(
		"qrImg"=$qrImg,
		"qrlink"=$qrlink,
		"photo"=$photo,
		"qrmothersname"=>$qrmothersname,
		"qrfathersname"=>$qrfathersname,
		"qrfirstname"=>$qrfirstname,
		"qrmiddlename"=>$qrmiddlename,
		"qrlastname"=>$qrlastname,
		"qrbirthdate"=>$qrbirthdate,
		"qrgender"=>$qrgender,
		"qrbloodtype"=>$qrbloodtype,
		"qrcontactperson"=>$qrcontactperson,
		"qraddress"=>$qraddress,
		"qraccountstatus"=>$qraccountstatus

	);  


	update($edited_user,$id,$table_name);
	
	header("location: view_children.php")
	

 ?>
