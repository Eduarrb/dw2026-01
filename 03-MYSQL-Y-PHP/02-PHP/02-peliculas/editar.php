<?php include 'db.php'; ?>
<?php ob_start(); ?>
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
            <h2 class="text-center col-md-12">Editar película</h2>
            <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM peliculas WHERE peli_id = $id";
                $res = mysqli_query($con, $query);
                $pelicula = mysqli_fetch_assoc($res);
            ?>
            <form class="col-md-6" method="POST">
                <div class="form-group">
                    <label for="peli_nombre">Nombre de la película</label>
                    <input type="text" class="form-control" id="peli_nombre" name="peli_nombre" value="<?php echo $pelicula['peli_nombre']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_genero">Género</label>
                    <input type="text" class="form-control" id="peli_genero" name="peli_genero" value="<?php echo $pelicula['peli_genero']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_anio">Fecha de estreno</label>
                    <input type="date" class="form-control" id="peli_anio" name="peli_anio" value="<?php echo $pelicula['peli_anio']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_restricciones">Restricciones</label>
                    <input type="text" class="form-control" id="peli_restricciones" name="peli_restricciones" value="<?php echo $pelicula['peli_restricciones']; ?>">
                </div>
                <div class="form-group">
                    <label for="peli_imagen">Imagen URL</label>
                    <input type="text" class="form-control" id="peli_imagen" name="peli_imagen" value="<?php echo $pelicula['peli_imagen']; ?>">
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
                            <?php if ($fila['dire_id'] === $pelicula['peli_dire_id']): ?>
                                <option value="<?php echo $fila['dire_id']; ?>" selected>
                                    <?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                                </option>
                            <?php else: ?>
                                <option value="<?php echo $fila['dire_id']; ?>">
                                    <?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                                </option>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Editar película" class="btn btn-info btn-block" name="editar">
                </div>
            </form>
            <?php
                if(isset($_POST['editar'])) {
                    $peli_nombre = $_POST['peli_nombre'];
                    $peli_genero = $_POST['peli_genero'];
                    $peli_anio = $_POST['peli_anio'];
                    $peli_restricciones = $_POST['peli_restricciones'];
                    $peli_imagen = $_POST['peli_imagen'];
                    $peli_dire_id = $_POST['peli_dire_id'];

                    $query = "UPDATE peliculas SET peli_nombre = '$peli_nombre', peli_genero = '$peli_genero', peli_anio = '$peli_anio', peli_restricciones = '$peli_restricciones', peli_imagen = '$peli_imagen', peli_dire_id = $peli_dire_id WHERE peli_id = $id";

                    $res = mysqli_query($con, $query);

                    header("Location: ./");

                }
            ?>
        </div>
    </section>
</body>
</html>