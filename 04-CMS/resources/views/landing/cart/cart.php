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
                
            </div>
        </div>
    </div>
</section>