<?php
    require_once "../includes/config.php";

    $USERID = $_POST['USERID'];
    $ACT = $_POST['ACT'];

    if($ACT == 1){
        $sql = "UPDATE usuarios SET fecha_baja = NOW() WHERE id = " . $USERID;
    }else{
        $sql = "UPDATE usuarios SET fecha_baja = null WHERE id = " . $USERID;
    }

    if(!mysqli_query($conn, $sql)){
        echo 2;
        die();
    }

    echo 1;
?>