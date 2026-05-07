<?php
    function getLandingProductos(string $url) {
        if($url === '/productos') {
            $query = query("SELECT a.*, c.id AS talla_id, c.sigla AS talla_sigla FROM productos a INNER JOIN producto_talla b ON a.id = b.productoId INNER JOIN tallas c ON b.tallaId = c.id");
        } else {
            $query = query("SELECT a.*, c.id AS talla_id, c.sigla AS talla_sigla FROM productos a INNER JOIN producto_talla b ON a.id = b.productoId INNER JOIN tallas c ON b.tallaId = c.id WHERE a.destacado = 1");
        }

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
                    'imagen' => $row['imagen'],
                    'tallas' => []
                ];
            }

            // si existe tallas asociadas, lo agregamos al array dentro del producto 
            if($row['talla_id'] !== null) {
                $productos[$id]['tallas'][] = [
                    'id' => $row['talla_id'],
                    'sigla' => $row['talla_sigla']
                ];
            }
        }

        echo json_encode(array_values($productos));
    }
?>