<?php
    if(isset($_POST['get']) && $_POST['get'] == 1){
        session_start();
        require_once '../includes/config.php';
    }


    $sql = "SELECT carritos.id AS 'cartId',
                   carritos.producto_id,
                   carritos.usuario_id,
                   productos.portada,
                   productos.precio,
                   productos.stock,
                   productos.titulo,
                   carritos.cantidad
            FROM carritos
            INNER JOIN productos ON carritos.producto_id = productos.id
            WHERE carritos.usuario_id = '" . $_SESSION['USER'][0]['id'] . "'";
    
    $query = mysqli_query($conn, $sql);
    
    if(!$query){
        die('Hubo un error en la consulta: ' . mysqli_error($conn));
    }
    
    $cartProds = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(isset($_POST['get']) && $_POST['get'] == 1){
        echo json_encode($cartProds);
    }

?>