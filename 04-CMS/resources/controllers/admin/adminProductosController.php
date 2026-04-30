<?php
    function getSelectCategorias(int $catId = 0, bool $edit = false) {
        $res = query("SELECT * FROM categorias");
        while($row = arrayAssoc($res)) {
            $nombre = ucfirst($row['nombre']);
            ?>
                <option value="<?php echo $row['id']; ?>" <?php echo ($edit && (int)$row['id'] === $catId) ? 'selected' : ''; ?>>
                    <?php echo $nombre; ?>
                </option>
        <?php }
    }

    function getCheckTallas() {
        $res = query("SELECT * FROM tallas");
        while($row = arrayAssoc($res)) {
            ?>
                <div>
                    <input type="checkbox" id="<?php echo $row['nombre']; ?>" name="tallas[]" value="<?php echo $row['id']; ?>" >
                    <label for="<?php echo $row['nombre']; ?>"><?php echo $row['sigla']; ?></label>
                </div>
        <?php }
    }

    function getCheckTallasEdit(int $prodId) {
        $resTallas = query("SELECT tallaId FROM producto_talla WHERE productoId = $prodId");
        $tallas = [];
        while($row = arrayAssoc($resTallas)) {
            $tallas[] = $row['tallaId'];
        }

        $res = query("SELECT * FROM tallas");
        while($row = arrayAssoc($res)) {
            $checked = in_array($row['id'], $tallas) ? 'checked' : '';
            ?>
                <div>
                    <input 
                        type="checkbox" 
                        id="<?php echo $row['nombre']; ?>" 
                        name="tallas[]" 
                        value="<?php echo $row['id']; ?>" 
                        <?php echo $checked; ?> 
                    >
                    <label for="<?php echo $row['nombre']; ?>"><?php echo $row['sigla']; ?></label>
                </div>
        <?php }
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

            $imagen = md5(uniqid()) . "." . explode(".", $imagen)[1];
            move_uploaded_file($imagenTmp, "../img/productos/$imagen");

            $prod = query("INSERT INTO productos (nombre, descripcion, precio, catId, stock, destacado, activo, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$catId', '$stock', '$destacado', '$activo', '$imagen')");

            foreach($tallas as $id) {
                query("INSERT INTO producto_talla (productoId, tallaId) VALUES (LAST_INSERT_ID(), $id)");
            }

            foreach($colores as $id) {
                query("INSERT INTO producto_color (productoId, colorId) VALUES (LAST_INSERT_ID(), $id)");
            }

            if($prod) {
                setSwal('Producto creado', 'El producto ha sido creado exitosamente', 'success');
                redirect('productos');
            }
        }
    }

    function getProductos() {
        $res = query("SELECT a.id AS prodId, a.nombre AS prodNombre, a.imagen AS prodImg, a.precio AS precio, a.destacado AS destacado, a.stock AS stock, a.activo AS activo, b.nombre AS catNombre FROM productos a INNER JOIN categorias b ON a.catId = b.id");
        while($row = arrayAssoc($res)) {
            $destacado = $row['destacado'] == 1 ? '<div class="destacado">Destacado</div>' : '';
            $activo = $row['activo'] == 1 ? '<span class="activo">Activo</span>' : '<span class="inactivo">Inactivo</span>';
            $producto = <<<DELIMITADOR
                <div class="contenido__table__body__item">
                    <div>
                        <img src="../img/productos/{$row['prodImg']}" alt="{$row['prodNombre']}">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h3 class="mb-1">{$row['prodNombre']}</h3>
                        {$destacado}
                    </div>
                    <div>{$row['catNombre']}</div>
                    <div>$ {$row['precio']}</div>
                    <div>
                        <span>{$row['stock']}</span>
                    </div>
                    <div>{$activo}</div>
                    <div>
                        <a href="?edit={$row['prodId']}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <button>
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
DELIMITADOR;
            echo $producto;
        }
    }

    function getProductoEdit() {
        if(isset($_GET['edit'])) {
            $id = escape(trim($_GET['edit']));
            $producto = query("SELECT * FROM productos WHERE id = $id");
            return arrayAssoc($producto);
        }
    }
?>