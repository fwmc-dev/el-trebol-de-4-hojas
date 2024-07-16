<?php

    session_start();
    require_once '../includes/config.php';

    $sqlPosts = "SELECT id, portada, titulo, descripcion, precio, stock FROM productos";

    $resultPosts = mysqli_query($conn, $sqlPosts);

    if (!$resultPosts) {
        die(mysqli_error($conn));
    }

    $postsInfo = mysqli_fetch_all($resultPosts, MYSQLI_ASSOC);

    echo json_encode($postsInfo);
?>