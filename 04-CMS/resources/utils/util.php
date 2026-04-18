<?php
    function redirect($url){
        header("Location: $url");
    }

    function dd($valor){
        echo "<pre style='font-size: 1.6rem;'>";
        var_dump($valor);
        echo "</pre>";
    }

    function query($query) {
        global $db;
        return mysqli_query($db, $query);
    }

    function escape($str) {
        global $db;
        return mysqli_real_escape_string($db, $str);
    }
?>