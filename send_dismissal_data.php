<?php
    include 'perfect_function.php';
    if (isset($_POST['attendance_events'])) {
        $events = $_POST['attendance_events'];
        $json_dec = json_decode($events, true);

        $res = get_attendance($json_dec['event_id']);
        $tmp = $res->fetch_assoc();
        $jsonObj = json_decode($tmp['attendance'], true);
        $att_arr = $jsonObj['attendance'];

        function map_return_ids($n) {
            return $n['id'];
        }

        if (isset($att_arr)) {
            $attended_id = array_map('map_return_ids', $att_arr);

            foreach ($json_dec['attendance_data'] as $key => $value) {
                $result = get_where_student_id('qrcodes', key($value));
                $result_arr = $result->fetch_assoc();

                if (array_search($result_arr['id'], $attended_id) != false) {
                    $att_arr[array_search($result_arr['id'], $attended_id)]['dismissal'] = $value[key($value)];
                } else {
                    $tmp_array = array(
                        "id" => $result_arr['id'],
                        "present" => "",
                        "dismissal" => $value[key($value)]
                    );
                    array_push($att_arr, $tmp_array);
                }
            }
            
            $to_send = array(
                "attendance" => $att_arr
            );

            $sent = array(
                "attendance" => json_encode($to_send)
            );



            $resu = update($sent, $json_dec['event_id'], "add_event");
            echo 'Success';
        }

        

        
    } else {
        echo "Null Post Data";
    }

    

?>