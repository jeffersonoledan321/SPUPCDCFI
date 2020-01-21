<?php 
include "perfect_function.php";

$table_name = "add_volunteer";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);

header("Location: volunteer_view.php");

 ?>