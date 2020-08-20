<?php
    session_start();
    session_destroy();
    header('location:restrito_entrada.php');
?>