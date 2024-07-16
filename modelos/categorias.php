<?php
    /* --------- PENDIENTE: FUNCIONALIDAD DE "ORDENAR POR:" ---------- */

    $categ = $_GET['categ'];

    if(!empty($_GET['sub_categ'])){
        $sub_categ = str_replace("_", " ", $_GET['sub_categ']);
    }



    if(empty($sub_categ)){
        $sql = "SELECT *, productos.id AS 'prodId' FROM productos
                INNER JOIN categorias ON productos.categoria_id = categorias.id
                WHERE categorias.nombre = '" . $categ . "'
                ORDER BY RAND() LIMIT 15";
    }else{
        $sql = "SELECT *, productos.id AS 'prodId' FROM productos
                INNER JOIN editoriales ON productos.editorial_id = editoriales.id
                WHERE editoriales.nombre = '" . $sub_categ . "'
                ORDER BY RAND() LIMIT 15";
    }

    
    $query = mysqli_query($conn, $sql);
    
    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $productos = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>