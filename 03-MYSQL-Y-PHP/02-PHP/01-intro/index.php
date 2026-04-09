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
            // echo 'Hola mundo desde PHP';

            $nombre = "Eduardo";

            $num = 10.56;

            $array = ['PHP', 'MySQL', 'HTML', 'CSS', "JavaScript", true, 10.3, null];

            // ⚡⚡ ARRAY ASSOCIATIVO ⚡⚡
            $personajes = [
                // CLAVE => VALOR | key => value pair
                'nombre' => 'Goku',
                'edad' => 40,
                'poder' => 'Kamehameha',
                'hobbies' => ['Luchar', 'Comer', 'Dormir'],
                'esHumano' => false,
                'nivelPoder' => 9000
            ];

            // print_r($array);
            var_dump($personajes);
            var_dump($nombre);

            // Funciones
            function saludar($nombre) {
                echo "Hola, {$nombre}. Bienvenido a PHP!";
            }

            saludar("Carlos");

            if ($num > 10) {
                echo "El número es mayor que 10";
            } else {
                echo "El número es menor o igual a 10";
            }

            echo "<br>";
            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i];
                echo "<br>";
            }
        ?>
    </pre>
    
</body>
</html>