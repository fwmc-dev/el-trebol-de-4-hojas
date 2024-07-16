<?php
    session_start();
    session_unset();
    session_destroy();


    header('Location: ../torres.php?sec=home');
    exit;
?>