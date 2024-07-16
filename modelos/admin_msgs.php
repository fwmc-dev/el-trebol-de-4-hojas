<?php

    session_start();
    require_once '../includes/config.php';

    $sqlMsgs = "SELECT * FROM mensajes";

    $resultMsgs = mysqli_query($conn, $sqlMsgs);

    if (!$resultMsgs) {
        die(mysqli_error($conn));
    }

    $msgsInfo = mysqli_fetch_all($resultMsgs, MYSQLI_ASSOC);

    echo json_encode($msgsInfo);
?>

