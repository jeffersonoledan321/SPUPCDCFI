<?php 
include "perfect_function.php";

$table_name = "add_director";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);

header("Location: directors_view.php");

 ?>