<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera página en PHP</title>
</head>
<body>
    <h1>Hola mundo con PHP</h1>
    
    <pre>
        <?php
            echo 'Hola mundo desde PHP';

            $nombre = "Eduardo";

            $num = 10.56;

            $arary = ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript', true, 10.3, null];


            echo '<h1>'. $nombre. '</h1>';
        ?>
    </pre>
    
</body>
</html>