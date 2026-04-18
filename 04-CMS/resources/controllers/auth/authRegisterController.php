<?php
    function postValidarRegistro(){
        $errores = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombres = escape(trim($_POST['nombres']));
            $apellidos = escape(trim($_POST['apellidos']));
            $email = escape(trim($_POST['email'])); 
            $password = escape(trim($_POST['password']));
            $confirmPassword = escape(trim($_POST['confirmPassword']));

            if(empty($nombres)){
                $errores['nombres'] = "El campo nombres no debe estar vacio";
            }

            dd($errores);
        }
    }
?>