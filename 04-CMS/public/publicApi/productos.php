<?php
    require_once '../../resources/config.php';

    if(isset($_GET['action']) && $_GET['action'] ==='obtenerLandingProductos') {
        getLandingProductos($_GET['url'], $_GET['prodName'], $_GET['categoria']);
    }

    if(isset($_GET['action']) && $_GET['action'] === 'obtenerResumen') {
        getResumen();
    }

    if(isset($_GET['action']) && $_GET['action'] === 'actualizarTalla') {
        actualizarTalla($_GET['prodId'], $_GET['datoId']);
    }

    if(isset($_GET['action']) && $_GET['action'] === 'actualizarColor') {
        actualizarColor($_GET['prodId'], $_GET['datoId']);
    }

    if(isset($_GET['action']) && $_GET['action'] === 'mas') {
        actualizarCantidad($_GET['prodId'], 'mas');
    }

    if(isset($_GET['action']) && $_GET['action'] === 'menos') {
        actualizarCantidad($_GET['prodId'], 'menos');
    }

    if(isset($_GET['action']) && $_GET['action'] === 'eliminarProd') {
        eliminarProducto($_GET['prodId']);
    }
?>