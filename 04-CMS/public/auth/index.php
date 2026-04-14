<?php require_once '../../resources/config.php'; ?>

<?php include VIEW_AUTH . DS . 'head.php'; ?>

    <?php include VIEW_AUTH . DS . 'nav.php'; ?>

		<?php
            if ($url == '/auth/' || $url == '/auth/index.php') {
                redirect('/auth/login');
            }

            if($url == '/auth/login') {
                include VIEW_AUTH . DS . 'login.php';
            }

            if($url == '/auth/register') {
                include VIEW_AUTH . DS . 'register.php';
            }

            if($url == '/auth/forgot') {
                include VIEW_AUTH . DS . 'forgot.php';
            }
        ?>
					
		<?php include VIEW_AUTH . DS . 'footer.php'; ?>