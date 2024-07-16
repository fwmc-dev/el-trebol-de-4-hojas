<?php
    
    $sql = "SELECT productos.portada, productos.titulo, compras.id, compras.estado, compras.cantidad, compras.precio, compras.fecha_compra
            FROM compras
            INNER JOIN productos ON compras.producto_id = productos.id
            WHERE usuario_id = " . $_SESSION['USER'][0]['id'];

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die(mysqli_error($conn));
    }

    $sqlInfo = "SELECT nombre, apellido, email, DNI, telefono FROM usuarios WHERE id = " . $_SESSION['USER'][0]['id'];

    $resultInfo = mysqli_query($conn, $sqlInfo);

    if (!$resultInfo) {
        die(mysqli_error($conn));
    }

    $userInfo = mysqli_fetch_assoc($resultInfo);

    $rowsCompras = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>