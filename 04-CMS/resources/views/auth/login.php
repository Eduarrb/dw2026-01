<section class="auth">
    <div class="auth__picture">
        <img src="../img/01.jpg" alt="register">
        <div class="gradiente"></div>
        <div class="text">
            <h2>Bienvenido(a)</h2>
            <p>
                Inicia sesión en tu cuenta
                <br>
                y descubre más.
            </p>
        </div>
    </div>
    <div class="auth__databox">
        <p>LOGIN</p>
        <h1>Iniciar Sesión</h1>
        <?php showSwalMensaje(); ?>
        <?php $res = postValidarLogin(); ?>
        <form method="post">
            <div class="formGroup">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="tucorreo@vogue.com" name="email" value="<?php echo getDato($res, 1, 'email'); ?>">
                <div class="error">
                    <?php echo getDato($res, 0, 'email'); ?>
                </div>
            </div>
            <div class="formGroup">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Tu Contraseña" name="password">
                <div class="error">
                    <?php echo getDato($res, 0, 'password'); ?>
                </div>
            </div>
            <div class="formGroup">
                <button type="submit" class="btn btn--secondary">Iniciar Sesión <i class="fa-solid fa-arrow-right ml-1"></i></button>
            </div>
        </form>
        <div class="auth__databox__redirect">
            <div>
                ¿No tienes una cuenta? <a href="register.html">Crea una aquí</a>
            </div>
            <div>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
</section>