<?php

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

    echo "<br>".json_encode($json_output);

    // Sending JSON to database

    





?>