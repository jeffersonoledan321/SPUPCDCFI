<?php

function getConnection()
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "system";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection Failed: ".$conn->connect_error);
	}

	return $conn;
}

function get($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	return $result;
}

// Get attendance JSON object literal
function get_attendance($id)
{
	$conn = getConnection();
	$sql = "SELECT attendance FROM add_event where id=$id";
	$result = $conn->query($sql);
	return $result;
}

function get_where($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where id=$id";
	$result = $conn->query($sql);
	return $result;
}

function get_where_student_id($table_name, $name)
{
	$conn = getConnection();
	$nameEXP = explode(" ", $name);
	$sql = 'SELECT id FROM qrcodes WHERE qrfirstname="'.$nameEXP[0].'" AND qrlastname="'.$nameEXP[1].'"';
	$result = $conn->query($sql);
	return $result;
}

function get_where_profile($table_name, $id)
{
	$conn = getConnection();
	$sql = "SELECT * FROM director_profile JOIN add_director ON 'add_director.id = director_profile.director_id WHERE add_director.id= $id'";
	$result = $conn->query($sql);
	return $result;
}

function get_where_custom($table_name, $column, $value)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where ".$column."='".$value."'";
	$result = $conn->query($sql);
	return $result;
}
function _get_photo_from_id($table_name, $id) {
	$user_data = get_where($table_name, $id);
	foreach ($user_data as $key => $row) {
		return $photo = $row['photo'];
	}
}
function insert($data, $table_name) 
{
	$conn = getConnection();
	$fields = ""; $values = "";

	foreach ($data as $key => $value) {
		$fields = $fields."$key".",";
		$values = $values."'".$value."',";
	}

	$cnt_fields = strlen($fields);
	$cnt_values = strlen($values);

	$fields = substr($fields, 0, $cnt_fields-1);
	$values = substr($values, 0, $cnt_values-1);

	$sql = "INSERT INTO $table_name (".$fields.") values (".$values.")";

	if ($conn->query($sql) === TRUE) {
    	$result =  "Record created successfully";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function update($data, $id, $table_name) 
{
	$conn = getConnection();
	$str="";

	foreach ($data as $key => $value) {
		$str = $str.$key."='".$value."',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str-1);

	$sql = "UPDATE $table_name set ".$str." where id='".$id."'";

	if ($conn->query($sql) === TRUE) {
    	$result =  " ";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function updateprofile($data, $id, $table_name,$profession,$education,$location,$skills,$motto) 
{
	$conn = getConnection();
	$str="";

	foreach ($data as $key => $value) {
		$str = $str.$key."='".$value."',";
	}

	$cnt_str = strlen($str);

	$str = substr($str, 0, $cnt_str-1);

	$sql = "UPDATE $table_name set ".$str." where id='".$id."'";

	if ($conn->query($sql) === TRUE) {
    	$result =  " ";
	} else {
	    $result = "Error: " . $sql . "<br>" . $conn->error;
	}
	return $result;
}

function delete($id, $table_name)
{
	$conn = getConnection();
	$sql = "DELETE FROM $table_name where id=$id";
	if ($conn->query($sql) == TRUE) {
		$result = "Record deleted successfully";
	} else {
		$result = "Error: " . $sql . "<br>" . $conn->error;	
	}
	return $result;
}

function custom_query($mysql_query)
{
	//for select statements only
	$conn = getConnection();
	$sql = $mysql_query;
	$result = $conn->query($sql);	
	return $result;
}

function base_url()
{
	$project_name = "ci";
	return "http://" . $_SERVER['SERVER_NAME'].'/'.$project_name.'/'; 
}

function get_where_double($col1, $value1, $col2, $value2)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name where $col1=$value1 and $col2=$value2";
	$result = $conn->query($sql);
	return $result;
}

function _hash_string($str)
{
	$hashed_string = sha1($str);
	return $hashed_string;
}


function generate_random_string($length)
{
	$characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0;$i< $length; $i++){
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}


function count_rows($table_name)
{
	$conn = getConnection();
	$sql = "SELECT * FROM $table_name";
	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	return $rowcount;
}


function get_max($table_name)
{
	$mysql_query = "SELECT MAX(id) as last_id FROM $table_name";
	$result = custom_query($mysql_query);
	foreach ($result as $key => $row) {
		return $row['last_id'];
	}
}

function _get_id_from_token($token) 
{
	$result = get_where_custom("tokens", "token", $token);
	foreach ($result as $key => $row) {
		return $row['user_id'];
	}
}


?>