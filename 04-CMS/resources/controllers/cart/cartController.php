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
                $producto = <<<DELIMITADOR
                    <article class="cart__contenedor__box__producto__item">
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
                                        <ul>
                                            <li>S</li>
                                            <li>M</li>
                                            <li>L</li>
                                            <li>XL</li>
                                        </ul>
                                    </div>
                                    <div class="cart__contenedor__box__producto__item__data__col__selects__color inputSelect_cart">
                                        <div>Color <i class="fa-solid fa-angle-down"></i></div>
                                        <ul>
                                            <li>Blanco</li>
                                            <li>Negro</li>
                                            <li>Rojo</li>
                                            <li>Verde</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cart__contenedor__box__producto__item__data__col__canti">
                                    <span class="menos"><i class="fa-solid fa-minus"></i></span>
                                    <span class="num">1</span>
                                    <span class="mas"><i class="fa-solid fa-plus"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="cart__contenedor__box__producto__item__actions">
                            <span class="close"><i class="fa-solid fa-x"></i></span>
                            <span class="subTotal">$34.99</span>
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
?>