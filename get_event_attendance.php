<?php
    include 'perfect_function.php';

    $res = get_attendance($_POST['id']);
    $tmp = $res->fetch_assoc();
    $jsonObj = json_decode($tmp['attendance'], true);
    echo json_encode($jsonObj['attendance']);
?>