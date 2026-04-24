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
        <?php showSwalMensaje(); ?>
        <?php $res = postValidarRegistro(); ?>
        <form action="" method="post">
            <div class="rowGroup">
                <div class="formGroup">
                    <label for="nombres">Nombres</label>
                    <input type="text" id="nombres" placeholder="Tu Nombre" name="nombres" value="<?php echo getDato($res, 1, 'nombres'); ?>">
                    <div class="error">
                        <?php echo getDato($res, 0, 'nombres'); ?>
                    </div>
                </div>
                <div class="formGroup">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" id="apellidos" placeholder="Tus Apellidos" name="apellidos" value="<?php echo getDato($res, 1, 'apellidos'); ?>">
                    <div class="error">
                        <?php echo getDato($res, 0, 'apellidos'); ?>
                    </div>
                </div>
            </div>
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
                <label for="confirmPassword">Confirmar Contraseña</label>
                <input type="password" id="confirmPassword" placeholder="Confirma tu Contraseña" name="confirmPassword">
                <div class="error">
                    <?php echo getDato($res, 0, 'confirmPassword'); ?>
                </div>
            </div>
            <div class="formGroup">
                <button type="submit" class="btn btn--secondary">Crear Cuenta <i class="fa-solid fa-arrow-right ml-1"></i></button>
            </div>
        </form>
        
        <div class="auth__databox__redirect">
            ¿Ya tienes una cuenta? <a href="login.html">Inicia Sesión</a>
        </div>
    </div>
</section>