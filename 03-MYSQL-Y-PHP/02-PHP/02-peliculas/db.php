<?php
    $con = mysqli_connect('localhost','root', 'web12345678', 'stream');
    if(!$con) {
        echo 'conexión fallida';
        exit;
    }
?>