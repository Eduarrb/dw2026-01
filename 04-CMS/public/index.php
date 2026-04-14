<?php require_once '../resources/config.php'; ?>

<?php include VIEW_LAND . DS . 'head.php'; ?>

	<?php include VIEW_LAND . DS . 'nav.php'; ?>

		<?php  ?>

		<?php $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>

		<?php 
			if ($url == '/' || $url == '/index.php') {
				include VIEW_LAND . DS . 'headerLand.php';
				include VIEW_LAND . DS . 'servicios.php';
				include VIEW_LAND . DS . 'homeCategorias.php';
				include VIEW_LAND . DS . 'landProductos.php';
			}

			if($url == '/productos') {
				include VIEW_LAND . DS . 'productos' . DS . 'header.php';
				include VIEW_LAND . DS . 'productos' . DS . 'productos.php';
			}
		?>

		<?php include VIEW_LAND . DS . 'footer.php'; ?>
		
		