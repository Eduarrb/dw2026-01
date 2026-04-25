<?php require_once '../resources/config.php'; ?>

<?php include VIEW_LAYOUT . DS . 'head.php'; ?>

	<?php include VIEW_LAND . DS . 'nav.php'; ?>

		<?php 
			if ($url == '/' || $url == '/index.php') {
				include VIEW_LAND . DS . 'headerLand.php';
				include VIEW_LAND . DS . 'servicios.php';
				dd($_SESSION['rol']);
				include VIEW_LAND . DS . 'homeCategorias.php';
				include VIEW_LAND . DS . 'landProductos.php';
			}

			if($url == '/productos') {
				include VIEW_LAND . DS . 'productos' . DS . 'header.php';
				include VIEW_LAND . DS . 'productos' . DS . 'productos.php';
			}

			if($url == '/contacto') {
				include VIEW_LAND . DS . 'contacto' . DS . 'header.php';
				include VIEW_LAND . DS . 'contacto' . DS . 'contacto.php';
			}

			if($url == '/cart') {
				include VIEW_LAND . DS . 'cart' . DS . 'cart.php';
			}
		?>

		<?php include VIEW_LAND . DS . 'footer.php'; ?>