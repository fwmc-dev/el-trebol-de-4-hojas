<?php
    $sql = "SELECT productos.id, portada, titulo, precio, categoria_id, editorial_id, editoriales.nombre AS 'editNombre', stock, descripcion
            FROM productos
            INNER JOIN editoriales ON productos.editorial_id = editoriales.id
            WHERE productos.id = " . $_GET['prodID'];

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Error de consulta");
    }

    $prodInfo = mysqli_fetch_array($result);
?>
    


