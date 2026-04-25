<?php
    function postValidarLogin(){
        $errores = [];
        $data = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = escape(trim($_POST['email']));
            $password = escape(trim($_POST['password']));

            if(strlen($email) <= 0) {
                $errores['email'] = "El campo email no debe estar vacio";
            }
            if(strlen($password) <= 0) {
                $errores['password'] = "El campo password no debe estar vacio";
            }
            if(!empty($errores)) {
                $data['email'] = $email;
                return [$errores, $data];
            } else {
                if(postLoginUser($email, $password)) {
                    redirect("../");
                } else {
                    setSwal("Error", "Credenciales incorrectas", "error");
                    redirect("/auth/login");
                }
            }
        }
    }

    function postLoginUser($email, $password) {
        $res = query("SELECT * FROM usuarios WHERE email = '$email' AND estado = 1");
        if(mysqli_num_rows($res) == 1) {
            $user = arrayAssoc($res);
            $id = $user['id'];
            $nombres = $user['nombres'];
            $apellidos = $user['apellidos'];
            $email = $user['email'];
            $passwordHashed = $user['password'];
            $rol = $user['rol'];

            if(password_verify($password, $passwordHashed)) {
                $_SESSION['id'] = $id;
                $_SESSION['nombres'] = $nombres;
                $_SESSION['apellidos'] = $apellidos;
                $_SESSION['rol'] = $rol;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
?>