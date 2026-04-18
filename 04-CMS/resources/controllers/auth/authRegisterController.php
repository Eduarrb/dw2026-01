<?php
    function postValidarRegistro(){
        $errores = [];
        $data = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombres = escape(trim($_POST['nombres']));
            $apellidos = escape(trim($_POST['apellidos']));
            $email = escape(trim($_POST['email'])); 
            $password = escape(trim($_POST['password']));
            $confirmPassword = escape(trim($_POST['confirmPassword']));

            if(empty($nombres)){
                $errores['nombres'] = "El campo nombres no debe estar vacio";
            }
            if(empty($apellidos)){
                $errores['apellidos'] = "El campo apellidos no debe estar vacio";
            }
            if(empty($email)){
                $errores['email'] = "El campo email no debe estar vacio";
            }
            if(validarEmail($email)) {
                $errores['email'] = "El email ya esta registrado";
            }
            if(empty($password)){
                $errores['password'] = "El campo password no debe estar vacio";
            }
            if($password !== $confirmPassword){
                $errores['confirmPassword'] = "Las contraseñas no coinciden";
            }
            
            if(!empty($errores)) {
                $data['nombres'] = $nombres;
                $data['apellidos'] = $apellidos;
                $data['email'] = $email;
                return [$errores, $data];
            }
            else {
                dd("Registro exitoso");
            }
        }
    }
?>