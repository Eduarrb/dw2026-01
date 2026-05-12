<section class="cart">
    <div class="cart__contenedor contenedor">
        <div class="cart__contenedor__header pt-4 pb-4">
            <a href="productos.html">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            Tu Carrito
        </div>
        <?php showSwalMensaje(); ?>
        <div class="cart__contenedor__box">
            <div class="cart__contenedor__box__producto">
                <?php getCartProductos(); ?>
            </div>
            <div class="cart__contenedor__box__resumen">
                <!-- <div class="cart__contenedor__box__resumen--title">
                    resumen
                </div>
                <div class="cart__contenedor__box__resumen__subtotal">
                    <span>Subtotal</span>
                    <span>$35.55</span>
                </div>
                <div class="cart__contenedor__box__resumen__envio">
                    <span>Envío</span>
                    <span>Gratis</span>
                </div>
                <hr>
                <div class="cart__contenedor__box__resumen__total">
                    <span>Total</span>
                    <span>$35.55</span>
                </div>
                <form class="cart__contenedor__box__resumen__form">
                    <button type="submit" class="btn btn--secondary">FINALIZAR COMPRA</button>
                </form> -->
            </div>
        </div>
    </div>
</section>