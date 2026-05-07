<?php
    require_once '../../resources/config.php';

    if(isset($_GET['action']) && $_GET['action'] ==='obtenerLandingProductos') {
        getLandingProductos($_GET['url']);
    }
?>