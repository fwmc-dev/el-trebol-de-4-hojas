<?php
    require_once "../includes/config.php";

    $prodID = $_POST['prodID'];
    $userID = $_POST['userID'];
    $cantProd = $_POST['cantProd'];

    $sqlStock = "SELECT stock FROM productos WHERE id = " . $prodID . ";";

    $stockRes = mysqli_query($conn, $sqlStock);

    $stock = mysqli_fetch_assoc($stockRes);

    if($stock['stock'] > 0){

        $sqlValid = "SELECT * FROM carritos WHERE producto_id = " . $prodID . " AND usuario_id = " . $userID . ";";
        $validRes = mysqli_query($conn, $sqlValid);

        if(mysqli_num_rows($validRes) == 0){
            $sql = "INSERT INTO carritos (id, producto_id, usuario_id, cantidad) VALUES (null, ".$prodID. ", " .$userID. ", ".$cantProd.")";
            
            if(!mysqli_query($conn, $sql)){
                echo 0;
                die();
            }
        
            echo 1;
            die();
        }

        echo 4;
        die();
    }

    echo 3;
?>