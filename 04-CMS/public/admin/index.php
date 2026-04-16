<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <main class="main">
        <nav class="navbar">
            <div class="navbar__top">
                <h2>vogue</h2>
                <p>panel de administración</p>
            </div>
            <div class="navbar__menu">
                <a href="#" class="navbar__menu__link">
                    <i class="fa-solid fa-sliders"></i> Dashboard
                </a>
                <a href="#" class="navbar__menu__link">
                    <i class="fa-solid fa-box-open"></i> Productos
                </a>
                <a href="#" class="navbar__menu__link">
                    <i class="fa-regular fa-message"></i> Mensajes
                </a>
            </div>
            <div class="navbar__bottom">
                <a href="../">
                    <i class="fa-solid fa-store"></i> Ver tienda
                </a>
            </div>
        </nav>
        <div class="contenido">
            <div class="contenido__header">
                <div class="contenido__header__titulos">
                    <h1>Dashboard</h1>
                    <p>6 productos</p>
                </div>
            </div>
            <div class="contenido__cards">
                <article class="contenido__cards__item">
                    <div class="contenido__cards__item__data">
                        <h2>Productos</h2>
                        <p>6</p>
                    </div>
                    <div class="contenido__cards__item__iconBox">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                </article>
                <article class="contenido__cards__item">
                    <div class="contenido__cards__item__data">
                        <h2>Pedidos</h2>
                        <p>0</p>
                    </div>
                    <div class="contenido__cards__item__iconBox">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </article>
                <article class="contenido__cards__item">
                    <div class="contenido__cards__item__data">
                        <h2>Ingresos</h2>
                        <p>$0.00</p>
                    </div>
                    <div class="contenido__cards__item__iconBox">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                </article>
                <article class="contenido__cards__item">
                    <div class="contenido__cards__item__data">
                        <h2>Mensajes</h2>
                        <p>0</p>
                    </div>
                    <div class="contenido__cards__item__iconBox">
                        <i class="fa-solid fa-message"></i>
                    </div>
                </article>
            </div>
            <div class="contenido__bottom">
                <div class="contenido__bottom__grafico">
                    <div class="contenido__bottom__grafico__top">
                        <h2>Ventas de la Semana</h2>
                        <div><i class="fa-solid fa-arrow-trend-up"></i></div>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="contenido__bottom__pedidos">
                    <h2>Pedidos Recientes</h2>
                    <div class="contenido__bottom__pedidos__item">
                        <div class="contenido__bottom__pedidos__item__col">
                            <p class="contenido__bottom__pedidos__item__col__nombre">Eduardo</p>
                            <div class="contenido__bottom__pedidos__item__col__fecha">14 abr, 16:30</div>
                        </div>
                        <div class="contenido__bottom__pedidos__item__col">
                            <p class="contenido__bottom__pedidos__item__col__precio">$0.00</p>
                            <div class="contenido__bottom__pedidos__item__col__pendiente">Pendiente</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/chart.js"></script>
</body>
</html>