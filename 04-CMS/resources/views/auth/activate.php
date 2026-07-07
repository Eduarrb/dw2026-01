<?php
    if(!isset($_GET['email']) || !isset($_GET['token'])) {
        setSwal('Error', 'Credenciales inválidas o faltantes', 'error');
        redirect('/auth/register');
    } else {
        postActivateUser();
    }

?>