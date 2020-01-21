<?php
    include 'perfect_function.php';

    $res = get("add_event");
    $events = $res->fetch_all(MYSQLI_ASSOC);
    echo json_encode($events);
?>  