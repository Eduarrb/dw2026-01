<?php
    if(isset($_GET['action']) && $_GET['action'] ==  'deleteProducto') {
        echo json_encode(['msg' => 'Producto eliminado']);
    }
?>