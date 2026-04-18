<section class="auth">
    <div class="auth__picture">
        <img src="../img/01.jpg" alt="register">
        <div class="gradiente"></div>
        <div class="text">
            <h2>ÚNETE A NOSOTROS</h2>
            <p>
                Crea tu cuenta
                <br>
                y descubre más.
            </p>
        </div>
    </div>
    <div class="auth__databox">
        <p>NUEVA CUENTA</p>
        <h1>Crear Cuenta</h1>
        <form action="" method="post">
            <div class="formGroup">
                <label for="name">Nombre Completo</label>
                <input type="text" id="name" placeholder="Tu Nombre">
            </div>
            <div class="formGroup">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="tucorreo@vogue.com">
            </div>
            <div class="formGroup">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Tu Contraseña">
            </div>
            <div class="formGroup">
                <label for="confirmPassword">Confirmar Contraseña</label>
                <input type="password" id="confirmPassword" placeholder="Confirma tu Contraseña">
            </div>
            <div class="formGroup">
                <button type="submit" class="btn btn--secondary">Crear Cuenta <i class="fa-solid fa-arrow-right ml-1"></i></button>
            </div>
        </form>
        <?php postValidarRegistro(); ?>
        <div class="auth__databox__redirect">
            ¿Ya tienes una cuenta? <a href="login.html">Inicia Sesión</a>
        </div>
    </div>
</section>