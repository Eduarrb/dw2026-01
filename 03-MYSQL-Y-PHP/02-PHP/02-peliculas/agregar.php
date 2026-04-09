<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center bg-primary text-white pt-5 pb-5">Bienvenido(a) Peliculas.com</h1>
    <section class="container">
        <div class="row py-4">
            <a href="./" class="btn btn-success mr-1">Regresar</a>
            <a href="#" class="btn btn-info">Directores</a>
        </div>
        <div class="row justify-content-center">
            <h2 class="text-center col-md-12">Agregar nueva película</h2>
            <!-- LOS FORMULARIOS HACEN 2 TIPOS DE PETICIONES: GET Y POST -->
            <form class="col-md-6" method="POST">
                <div class="form-group">
                    <label for="peli_nombre">Nombre de la película</label>
                    <input type="text" class="form-control" id="peli_nombre" name="peli_nombre">
                </div>
                <div class="form-group">
                    <label for="peli_genero">Género</label>
                    <input type="text" class="form-control" id="peli_genero" name="peli_genero">
                </div>
                <div class="form-group">
                    <label for="peli_anio">Fecha de estreno</label>
                    <input type="date" class="form-control" id="peli_anio" name="peli_anio">
                </div>
                <div class="form-group">
                    <label for="peli_restricciones">Restricciones</label>
                    <input type="text" class="form-control" id="peli_restricciones" name="peli_restricciones">
                </div>
                <div class="form-group">
                    <label for="peli_imagen">Imagen URL</label>
                    <input type="text" class="form-control" id="peli_imagen" name="peli_imagen">
                </div>
                <div class="form-group">
                    <label for="peli_dire_id">Directores</label>
                    <select name="peli_dire_id" id="peli_dire_id" class="form-control">
                        <option value="" selected disabled>-- Seleccione al director --</option>
                        <?php 
                            $query = "SELECT * FROM directores";
                            $res = mysqli_query($con, $query);
                        ?>
                        <?php while($fila = mysqli_fetch_assoc($res)): ?>
                            <option value="<?php echo $fila['dire_id']; ?>">
                                <?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Agregar película" class="btn btn-primary btn-block" name="guardar">
                </div>
            </form>
            <?php
                if(isset($_POST['guardar'])) {
                    // echo 'funciona';
                    $peli_nombre = $_POST['peli_nombre'];
                    echo $peli_nombre;
                }
            ?>
        </div>
    </section>
</body>
</html>