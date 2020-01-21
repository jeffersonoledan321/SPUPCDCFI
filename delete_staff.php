<?php 
include "perfect_function.php";

$table_name = "staff";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);

header("Location: view_staff.php");

 ?>