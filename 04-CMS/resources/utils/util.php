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

    function validarEmail($email) {
        $query = query("SELECT * FROM usuarios WHERE email = '$email'");
        if(mysqli_num_rows($query) > 0) {
            return true;
        }
        return false;
    }

    function getDato($array, $index, $key) {
        if(isset($array[$index][$key])) {
            return $array[$index][$key];
        } else {
            echo '';
        }
    }

    function setSwal($titulo, $texto, $icono){
        if(!empty($titulo)){
            $_SESSION['titulo'] = $titulo;
            $_SESSION['texto'] = $texto;
            $_SESSION['icono'] = $icono;
        } else {
            $titulo = '';
            $texto = '';
            $icono = '';
        }
    }

    function showSwalMensaje(){
        if(isset($_SESSION['titulo'])){
            $titulo = $_SESSION['titulo'];
            $texto = $_SESSION['texto'];
            $icono = $_SESSION['icono'];
            $script = <<<DELIMITADOR
                <script>
                    showSwal("$titulo", "$texto", "$icono");
                </script>
DELIMITADOR;
            echo $script;
            unset($_SESSION['titulo'], $_SESSION['texto'], $_SESSION['icono']);
        }
    }
?>