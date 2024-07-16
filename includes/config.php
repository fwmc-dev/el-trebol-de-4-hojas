<?php

    $conn =  mysqli_connect('localhost', 'root', '', 'el_trebol_de_4_hojas');
    
    if(!$conn){
        die("Hubo un problema de conexion, contactate con soporte para mas informacion: " . mysqli_connect_error());
    }

?>