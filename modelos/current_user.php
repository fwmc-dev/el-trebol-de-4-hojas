<?php
    /* -- Loged -- */

    if (isset($_SESSION["USER"]) && $_GET["sec"] == "login") {
        header("Location: ?sec=home");
    }

    if (isset($_SESSION["USER"]) && $_GET["sec"] == "sing-up") {
        header("Location: ?sec=home");
    }


    /* -- No Loged -- */

    if(!isset($_SESSION['USER']) && $_GET['sec'] == 'mi_cuenta'){
        header("Location: ?sec=login");
    }
    
    /* -- Not Allowed -- */
    
    if(!isset($_SESSION['USER']) && $_GET['sec'] == 'administracion'){
        header("Location: ?sec=401");
    }

    if(isset($_SESSION['USER']) && $_SESSION['USER'][0]['rol'] != 1 && $_GET['sec'] == 'administracion'){
        header("Location: ?sec=401");
    }




    /*$user;

    if (isset($_SESSION['user_id'])) {
        $qryUser = "SELECT id, nombre, email, esMod, monedas, descripcion, fotoPerfil FROM usuarios WHERE id = " . $_SESSION['user_id'] . ";";
        $resUser = mysqli_query($conn, $qryUser);

        if(!$resUser){
            die(mysqli_error($conn));
        }

        $user = mysqli_fetch_assoc($resUser);
    }*/
?>