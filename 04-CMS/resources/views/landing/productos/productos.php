<section class="contenidoProd pt-4 pb-3">
    <div class="contenidoProd__contenedor contenedor">
        <form action="" class="contenidoProd__contenedor__form">
            <div class="contenidoProd__contenedor__form__inputSearch">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar productos..." />
            </div>
            <div class="contenidoProd__contenedor__form__todos inputSelect">
                <div>Todas <i class="fa-solid fa-angle-down"></i></div>
                <ul>
                    <li>Todas<i class="fa-solid fa-check"></i></li>
                    <?php getLandingCategorias(); ?>
                </ul>
            </div>
            <div class="contenidoProd__contenedor__form__recientes inputSelect">
                <div>Más recientes <i class="fa-solid fa-angle-down"></i></div>
                <ul>
                    <li>Más recientes<i class="fa-solid fa-check"></i></li>
                    <li>Precio: Menor a mayor</li>
                    <li>Precio: Mayor a menor</li>
                </ul>
            </div>
        </form>
        <div class="contenidoProd__contenedor__filtrosTags"></div>
        <div class="contenidoProd__contenedor__productos">
            <div class="contenidoProd__contenedor__productos--cantidad">6 productos</div>
            <div class="productos__contenedor__box d-flex mt-3">
                
            </div>
        </div>
    </div>
</section>