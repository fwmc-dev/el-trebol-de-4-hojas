<?php
    require_once '../includes/config.php';

    $NOMBRE = $_POST['NOMBRE'];
    $APELLIDO = $_POST['APELLIDO'];
    $EMAIL = $_POST['EMAIL'];
    $TELEFONO = $_POST['TELEFONO'];
    $COMENTARIO = $_POST['COMENTARIO'];

    $sql = "INSERT INTO mensajes VALUES(null, '" . $NOMBRE . "', '" . $APELLIDO. "', '" . $EMAIL . "', " . $TELEFONO . ", '" . $COMENTARIO ."')";

    if(!mysqli_query($conn, $sql)){
        echo 2;
        die();
    }

    echo 1;
?>