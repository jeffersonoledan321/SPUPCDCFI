<?php
include "perfect_function.php";

$table_name = "add_volunteer";
$id = $_GET['id'];
$photo = "";

$user_editedvalues = array (
    //columname from table => value from post
        "photo" => $photo
);

$photo2 = _get_photo_from_id($table_name, $id);
unlink('pics'.$photo2);

update($user_editedvalues, $id, $table_name);

header("Location: edit_volunteer.php?id=".$id);

?>