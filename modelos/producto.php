<?php

    $prodId = $_GET["prodId"];

    $sql = "SELECT productos.id,
                   productos.titulo,
                   productos.descripcion,
                   productos.portada,
                   productos.precio,
                   productos.stock,
                   productos.descuento,
                   categorias.id AS 'idCate',
                   categorias.nombre AS 'nombreCate',
                   editoriales.nombre AS 'nombreEdit'
            FROM productos
            INNER JOIN categorias ON productos.categoria_id = categorias.id
            INNER JOIN editoriales ON productos.editorial_id = editoriales.id
            WHERE productos.id = '" . $prodId . "';";
    
    $query = mysqli_query($conn, $sql);
    
    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $producto = mysqli_fetch_assoc($query);
    
    $sql2 = "SELECT id, titulo, portada, precio FROM productos WHERE categoria_id = '" . $producto["idCate"] . "' ORDER BY RAND() LIMIT 4";

    $query2 = mysqli_query($conn, $sql2);
    
    if(!$query2){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $productosRel = mysqli_fetch_all($query2, MYSQLI_ASSOC);
?>