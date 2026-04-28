<?php
    function getSelectCategorias() {
        $res = query("SELECT * FROM categorias");
        while($row = arrayAssoc($res)) {
            $nombre = ucfirst($row['nombre']);
            $categoria = <<<DELIMITADOR
                <option value="{$row['id']}">{$nombre}</option>
DELIMITADOR;
            echo $categoria;
        }
    }

    function getCheckTallas() {
        $res = query("SELECT * FROM tallas");
        while($row = arrayAssoc($res)) {
            $talla = <<<DELIMITADOR
                <div>
                    <input type="checkbox" id="{$row['nombre']}" name="tallas[]" value="{$row['id']}">
                    <label for="{$row['nombre']}">{$row['sigla']}</label>
                </div>
DELIMITADOR;
            echo $talla;
        }
    }

    function getCheckColores() {
        $res = query("SELECT * FROM colores");
        while($row = arrayAssoc($res)) {
            $color = <<<DELIMITADOR
                <div>
                    <input type="checkbox" id="color{$row['nombre']}" name="colores[]" value="{$row['id']}">
                    <label for="color{$row['nombre']}">{$row['nombre']}</label>
                </div>
DELIMITADOR;
            echo $color;
        }
    }

    function postProducto() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = escape(trim($_POST['nombre']));
            $descripcion = escape(trim($_POST['descripcion']));
            $precio = escape(trim($_POST['precio']));
            $catId = escape(trim($_POST['catId']));
            $stock = escape(trim($_POST['stock']));
            $destacado = isset($_POST['destacado']) ? 1 : 0;
            $activo = isset($_POST['activo']) ? 1 : 0;
            $tallas = $_POST['tallas'];
            $colores = $_POST['colores'];
            $imagen = $_FILES['imagen']['name'];
            $imagenTmp = $_FILES['imagen']['tmp_name'];

            // dd($tallas);

            // $imagen = md5(uniqid()) . "." . explode(".", $imagen)[1];
            // move_uploaded_file($imagenTmp, "../img/productos/$imagen");

            // $prod = query("INSERT INTO productos (nombre, descripcion, precio, catId, stock, destacado, activo, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$catId', '$stock', '$destacado', '$activo', '$imagen')");

            foreach($tallas as $id) {
                dd($id);
            }

            // setSwal('Producto creado', 'El producto ha sido creado exitosamente', 'success');
            // redirect('productos');
        }
    }
?>