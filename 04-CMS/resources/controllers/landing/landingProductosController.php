<?php
    function getLandingProductos(string $url, string $prodName = '', string $categoria = '') {
        if($url === '/productos') {
            if($prodName !== '') {
                $query = query("SELECT a.*, c.id AS talla_id, c.sigla AS talla_sigla FROM productos a INNER JOIN producto_talla b ON a.id = b.productoId INNER JOIN tallas c ON b.tallaId = c.id WHERE a.nombre LIKE '$prodName%'");
            } 
            elseif($categoria !== '' && $categoria !== 'Todas') {
                $query = query("SELECT a.*, c.id AS talla_id, c.sigla AS talla_sigla FROM productos a INNER JOIN producto_talla b ON a.id = b.productoId INNER JOIN tallas c ON b.tallaId = c.id INNER JOIN categorias d ON a.catId = d.id WHERE d.nombre = '$categoria'");
            }
            else {
                $query = query("SELECT a.*, c.id AS talla_id, c.sigla AS talla_sigla FROM productos a INNER JOIN producto_talla b ON a.id = b.productoId INNER JOIN tallas c ON b.tallaId = c.id");
            }
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

    function getlandingCategorias() {
        $query = query("SELECT * FROM categorias");
        while($row = arrayAssoc($query)) {
            $categoria = <<<DELIMITADOR
                <li data-id="{$row['id']}">
                    {$row['nombre']}
                </li>
DELIMITADOR;
            echo $categoria;
        }   
    }
?>