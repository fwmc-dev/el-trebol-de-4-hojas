<?php
    require_once '../includes/config.php';

    $CANT = $_POST['CANT'];
    $CartID = $_POST['CartID'];

    $sql = "UPDATE carritos SET cantidad = (cantidad + ".$CANT.") WHERE id = ".$CartID.";";

    if(!mysqli_query($conn, $sql)){
        echo 2;
        die();
    }

    echo 1;
?>