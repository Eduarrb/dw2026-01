<?php
    $con = mysqli_connect('localhost:3307','root', '123456', 'stream');
    if(!$con) {
        echo 'conexión fallida';
        exit;
    }
?>