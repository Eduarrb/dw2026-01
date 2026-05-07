<?php
    function getLandingProductos() {
        $query = query("SELECT a.*, c.id AS talla_id, c.sigla AS talla_sigla FROM productos a INNER JOIN producto_talla b ON a.id = b.productoId INNER JOIN tallas c ON b.tallaId = c.id WHERE a.destacado = 1");

        $productos = [];

        while ($row = arrayAssoc($query)) {
            $id = $row['id'];

            // si el producto no ha sido agregado al array, lo agregamos
            if(!isset($productos[$id])) {
                $productos[$id] = [
                    'id' => $row['id'],
                    'nombre' => $row['nombre'],
                    'descripcion' => $row['descripcion'],
                    'precio' => $row['precio'],
                    'tallas' => []
                ];
            }
        }

        echo json_encode(array_values($productos));
    }
?>