<?php
    session_start();
    require_once "../includes/config.php";

    $allBought = true;
    $array;

    $sqlCarrito = "SELECT carritos.id AS 'cartID', carritos.producto_id, productos.precio, carritos.cantidad
                   FROM carritos
                   INNER JOIN productos ON carritos.producto_id = productos.id
                   WHERE carritos.usuario_id = '" . $_SESSION['USER'][0]['id'] . "';";

    $resultCarrito = mysqli_query($conn, $sqlCarrito);
    if(!$resultCarrito){
        $array = array(2, $allBought);
        echo json_encode($array);
        die();
    }

    $rowsCarrito = mysqli_fetch_all($resultCarrito, MYSQLI_ASSOC);

    //var_dump($rowsCarrito);
    
    foreach ($rowsCarrito as $rowCarrito) {

        $sqlStock = "SELECT stock FROM productos WHERE id = " . $rowCarrito['producto_id'] . ";";

        $resultStock = mysqli_query($conn, $sqlStock);

        $rowStock = mysqli_fetch_array($resultStock, MYSQLI_ASSOC);

        if($rowStock['stock'] > $rowCarrito['cantidad']){
            $sqlCompra = "INSERT INTO compras VALUES(null, ".$_SESSION['USER'][0]['id'].", '".$rowCarrito['producto_id']."', 'No Enviado', '".($rowCarrito['precio'] * $rowCarrito['cantidad'])."', 'Efectivo', '".$rowCarrito['cantidad']."', NOW());";
            if(!mysqli_query($conn, $sqlCompra)){
                $array = array(2, $allBought);
                echo json_encode($array);
                die();
            }


            $sqlActStock = "UPDATE productos SET stock = stock - ".$rowCarrito['cantidad']." WHERE id = ".$rowCarrito['producto_id'].";";
            if(!mysqli_query($conn, $sqlActStock)){
                $array = array(2, $allBought);
                echo json_encode($array);
                die();
            }

            $sqlResetCart = "DELETE FROM carritos WHERE id = " . $rowCarrito['cartID'].";";
            if(!mysqli_query($conn, $sqlResetCart)){
                $array = array(2, $allBought);
                echo json_encode($array);
                die();
            }
        }else{
            $allBought = false;
        }
    }

    $array = array(1, $allBought);
    echo json_encode($array);

?>