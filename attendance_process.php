<?php

    include 'perfect_function.php';

    $arr = array();

    // Check checkboxes
    foreach($_POST as $key => $value) {
        if($value === "on"){
            array_push($arr, substr($key, 8));
        }
    }

    // EMPTY JSON ARRAY FORMAT
    $json_output = array(
        "attendance" => []
    );

    foreach ($arr as $key => $value) {
        $tmp_arr = array(
            "id" => $value,
            "present" => $_POST['present-'.$value],
            "dismissal" => $_POST['dismissal-'.$value]
        );

        array_push($json_output['attendance'], $tmp_arr);
    }

    $to_send = array(
        "attendance" => json_encode($json_output)
    );
    // Sending JSON to database
    update($to_send, $_POST['id'], "add_event");
    header("location: view_events.php");
    die();

    





?>