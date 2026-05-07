<?php
    require_once '../../../resources/config.php';

    if(isset($_GET['action']) && $_GET['action'] ==  'deleteProducto') {
        postDeleteProducto((int)escape(trim($_GET['id'])));
    }
?>