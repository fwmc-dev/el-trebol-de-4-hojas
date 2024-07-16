<?php

    if(isset($_POST['get']) && $_POST['get'] == 1){
        session_start();
        require_once '../includes/config.php';
    }

    $sqlUsers = "SELECT id, nombre, apellido, email, telefono, DNI, fecha_baja FROM usuarios WHERE rol = 0";

    $resultUsers = mysqli_query($conn, $sqlUsers);

    if (!$resultUsers) {
        die(mysqli_error($conn));
    }

    $usersInfo = mysqli_fetch_all($resultUsers, MYSQLI_ASSOC);

    if(isset($_POST['get']) && $_POST['get'] == 1){
        echo json_encode($usersInfo);
    }
?>