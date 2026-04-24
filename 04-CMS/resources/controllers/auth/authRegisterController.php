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
                postRegistrarUsuario($nombres, $apellidos, $email, $password);
            }
        }
    }

    function postRegistrarUsuario($nombres, $apellidos, $email, $password){
        $token = md5($email);
        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        $res = query("INSERT INTO usuarios (nombres, apellidos, email, password, token) VALUES ('$nombres', '$apellidos', '$email', '$password', '$token')");
        $msj = "<h3>Por favor, activa tu cuenta mediante el siguiente</h3><a href='http://localhost:3000/auth/activate?email=$email&token=$token'>Link</a>";
        sendEmail($email, "Activar Cuenta", $msj);
        if($res) {
            setSwal("Registro Exitoso", "Por favor revisa tu correo para activar tu cuenta", "success");
            redirect("/auth/register");
        }
    }
?>