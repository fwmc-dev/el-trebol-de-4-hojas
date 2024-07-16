<?php
    /* --------- PENDIENTE: FUNCIONALIDAD DE "ORDENAR POR:" ---------- */

    //if(!empty($_GET['search'])){
        $search = str_replace("%20", " ", $_GET['q']);
    //}


    $sql = "SELECT *, productos.id AS 'prodId'
            FROM productos
            WHERE titulo LIKE '%" . $search . "%'
            ORDER BY RAND(), productos.titulo LIMIT 15";

    
    $query = mysqli_query($conn, $sql);
    
    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $productos = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>