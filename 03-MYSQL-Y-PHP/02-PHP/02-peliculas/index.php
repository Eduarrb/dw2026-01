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
            <a href="agregar.php" class="btn btn-success mr-1">Agregar Película</a>
            <a href="directores.php" class="btn btn-info">Directores</a>
        </div>
        <?php include 'db.php'; ?>
        <pre>
            <?php
                $query = "SELECT * FROM peliculas a INNER JOIN directores b ON a.peli_dire_id = b.dire_id";
                $respuesta = mysqli_query($con, $query);
                // var_dump($respuesta);
            ?>
        </pre>
        <div class="row">
            <?php while($fila = mysqli_fetch_assoc($respuesta)) : ?>
                <article class="col-md-3 mb-4">
                    <img src="<?php echo $fila['peli_imagen']; ?>" alt="<?php echo $fila['peli_nombre']; ?>" style="width: 100%;">
                    <h4><?php echo $fila['peli_nombre']; ?></h4>
                    <div>
                        <strong>Director:</strong> <?php echo $fila['dire_nombres'] . " " . $fila['dire_apellidos']; ?>
                    </div>
                    <div>
                        <strong>Género:</strong> <?php echo $fila['peli_genero']; ?>
                    </div>
                    <div>
                        <strong>Rating:</strong> <?php echo $fila['peli_restricciones']; ?>
                    </div>
                    <div>
                        <a href="editar.php?id=<?php echo $fila['peli_id']; ?>" class="btn btn-warning">editar</a>
                        <a href="eliminar.php?id=<?php echo $fila['peli_id']; ?>" class="btn btn-danger">eliminar</a>
                    </div>
                </article>
            <?php endwhile; ?>
            
        </div>
    </section>
</body>
</html>