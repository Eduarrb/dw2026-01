<nav class="nav pt-3 pb-3">
    <div class="nav__contenedor contenedor">
        <div class="nav__contenedor__menuIcon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <div class="nav__contenedor__menuIcon__circle"></div>
        </div>
        <a href="./" class="nav__contenedor--logo">vogue</a>
        <div class="nav__contenedor__menu">
            <a href="./" class="nav__contenedor__menu--link">inicio</a>
            <a href="./productos" class="nav__contenedor__menu--link">productos</a>
            <a href="./contacto" class="nav__contenedor__menu--link">contacto</a>
            <?php if(isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin') : ?>
                <a href="/admin" class="nav__contenedor__menu--link">admin</a>
            <?php endif; ?>
        </div>
        <div class="nav__contenedor__menuUser">
            <?php if(isset($_SESSION['nombres'])) : ?>
                <a href="#" class="nav__contenedor__menuUser--link saludo">Hola, <?php echo $_SESSION['nombres']; ?></a>
                <a href="/cart" class="nav__contenedor__menuUser--link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
                        />
                    </svg>
                </a>
                <a href="/auth/logout" class="nav__contenedor__menuUser--link">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                    </svg>
                </a>
            <?php else : ?>
                <a href="auth/login" class="nav__contenedor__menuUser--link saludo">Iniciar Sesión</a>
                <a href="auth/register" class="nav__contenedor__menuUser--link saludo">Registrate</a>
            <?php endif; ?>
        </div>
    </div>
</nav>