<?php
    require_once '../includes/config.php';

    $CARTID = $_POST['CARTID'];

    $sql = "DELETE FROM carritos WHERE id = " . $CARTID.";";

    if(!mysqli_query($conn, $sql)){
        echo 2;
        die();
    }

    echo 1;
?>