<?php
    require_once '../includes/config.php';

    $TITULO = $_POST['TITULO'];
    $PRECIO = $_POST['PRECIO'];
    $CATEGORIA = $_POST['CATEGORIA'];
    $EDITORIAL = $_POST['EDITORIAL'];
    $STOCK = $_POST['STOCK'];
    $DESCRIPCION = $_POST['DESCRIPCION'];

    if(isset($_POST['PRODID'])){
        echo 2;
    }else{
        $url = "productos/" . $TITULO . "/";
        $sql = "INSERT INTO productos VALUES(null, $CATEGORIA, $TITULO, $url, $EDITORIAL, $PRECIO, $DESCRIPCION, $STOCK, 0)";

        echo 2;
    }
