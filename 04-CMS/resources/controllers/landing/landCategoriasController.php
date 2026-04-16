<?php
    function getCategorias() {
        $res = query("SELECT * FROM categorias");
        while($row = mysqli_fetch_assoc($res)) {
            $categoria = <<<DELIMITATOR
                <a href="#" class="homeCategorias__contenedor__box--item">
                    <img src="img/categorias/{$row['imagen']}" alt="{$row['nombre']}" />
                    <h3>{$row['nombre']}</h3>
                </a>
DELIMITATOR;
            echo $categoria;
        }
    }
?>