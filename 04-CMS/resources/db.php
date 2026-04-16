<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "web12345678");  
    define("DB_NAME", "tienda");

    function conectarDB() {
        $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(!$db) {
            echo "Error no se puede conectar a la base de datos";
            exit;
        }
        return $db;
    }
?>