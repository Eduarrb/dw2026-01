<?php
    function postAddProductCart() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(!isset($_SESSION['id'])) {
                setSwal("Error", "Debes iniciar sesión para agregar productos al carrito", "error");
                redirect("/auth/login");
            } else {
                $prodId = escape(trim($_POST['prodId']));
                $userId = escape(trim($_SESSION['id']));
                $res = query("SELECT * FROM carrito WHERE prodId = $prodId AND userId = $userId");
                if(mysqli_num_rows($res) == 1) {
                    setSwal("Error", "El producto ya se encuentra en el carrito", "error");
                    redirect("/productos");
                } else {
                    setSwal("Éxito", "Producto agregado al carrito", "success");
                    query("INSERT INTO carrito (prodId, userId) VALUES ($prodId, $userId)");
                    redirect("/cart");
                }
            }
        }
    }

    function getCartProductos() {
        if(!isset($_SESSION['id'])) {
            setSwal("Error", "Debes iniciar sesión para ver tu carrito", "error");
            redirect("/auth/login");
        } else {
            $userId = escape(trim($_SESSION['id']));
            $res = query("SELECT * FROM productos a INNER JOIN carrito b ON a.id = b.prodId WHERE b.userId = $userId");
            while($row = arrayAssoc($res)) {
                $tallas = query("SELECT * FROM tallas a INNER JOIN producto_talla b ON a.id = b.tallaId WHERE b.productoId = {$row['id']}");
                $tallasStr = "";
                while($rowTalla = arrayAssoc($tallas)) {
                    $tallasStr .= "<li data-tallaid='{$rowTalla['id']}'>{$rowTalla['sigla']}</li>";
                }
                $colores = query("SELECT * FROM colores a INNER JOIN producto_color b ON a.id = b.colorId WHERE b.productoId = {$row['id']}");
                $coloresStr = "";
                while($rowColor = arrayAssoc($colores)) {
                    $coloresStr .= "<li data-colorid='{$rowColor['id']}'>{$rowColor['nombre']}</li>";
                }

                $subTotal = $row['precio'] * $row['cantidad'];

                $producto = <<<DELIMITADOR
                    <article class="cart__contenedor__box__producto__item" data-prodid="{$row['id']}">
                        <div class="cart__contenedor__box__producto__item__data">
                            <div class="cart__contenedor__box__producto__item__data__imgBox">
                                <img src="img/productos/{$row['imagen']}" alt="{$row['nombre']}">
                            </div>
                            <div class="cart__contenedor__box__producto__item__data__col">
                                <div class="cart__contenedor__box__producto__item__data__col--nombre">
                                    {$row['nombre']}
                                </div>
                                <div class="cart__contenedor__box__producto__item__data__col--descri">
                                    {$row['descripcion']}
                                </div>
                                <div class="cart__contenedor__box__producto__item__data__col__selects">
                                    <div class="cart__contenedor__box__producto__item__data__col__selects__talla inputSelect_cart">
                                        <div>Tallas <i class="fa-solid fa-angle-down"></i></div>
                                        <ul data-prodid="{$row['id']}">
                                            {$tallasStr}
                                        </ul>
                                    </div>
                                    <div class="cart__contenedor__box__producto__item__data__col__selects__color inputSelect_cart">
                                        <div>Color <i class="fa-solid fa-angle-down"></i></div>
                                        <ul data-prodid="{$row['id']}">
                                            {$coloresStr}
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart__contenedor__box__producto__item__data__col__canti">
                                    <span class="menos"><i class="fa-solid fa-minus"></i></span>
                                    <span class="num">{$row['cantidad']}</span>
                                    <span class="mas"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="cart__contenedor__box__producto__item__actions">
                            <span class="close" data-prodid="{$row['id']}"><i class="fa-solid fa-x"></i></span>
                            <span class="subTotal">$ {$subTotal}</span>
                        </div>
                    </article>
DELIMITADOR;
                echo $producto;
            }
        }
    }

    function getResumen() {
        $userId = escape(trim($_SESSION['id']));
        $res = query("SELECT * FROM productos a INNER JOIN carrito b ON a.id = b.prodId WHERE b.userId = $userId");
        $subtotal = 0;
        $total = 0;
        while($row = arrayAssoc($res)) {
            $subtotal += $row['precio'] * $row['cantidad'];
        }
        $total = $subtotal;
        echo json_encode(['subtotal' => $subtotal, 'total' => $total]);
    }

    function actualizarTalla($prodId, $tallaId) {
        query("UPDATE carrito SET tallaId = $tallaId WHERE prodId = $prodId AND userId = {$_SESSION['id']}");
    }

    function actualizarColor($prodId, $colorId) {
        query("UPDATE carrito SET colorId = $colorId WHERE prodId = $prodId AND userId = {$_SESSION['id']}");
    }

    function actualizarCantidad($prodId, $action) {
        $res = query("SELECT cantidad FROM carrito WHERE prodId = $prodId AND userId = {$_SESSION['id']}");
        $row = arrayAssoc($res);
        $cantidad = $row['cantidad'];
        if($action === 'mas') {
            $cantidad++;
        } else if($action === 'menos' && $cantidad > 1) {
            $cantidad--;
        }
        query("UPDATE carrito SET cantidad = $cantidad WHERE prodId = $prodId AND userId = {$_SESSION['id']}");
    }

    function eliminarProducto($prodId) {
        query("DELETE FROM carrito WHERE prodId = $prodId AND userId = {$_SESSION['id']}");
    }
?>