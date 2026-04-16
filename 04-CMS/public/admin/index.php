<?php require_once '../../resources/config.php'; ?>

<?php include VIEW_LAYOUT . DS . "head.php"; ?>

    <main class="main">
        <?php include VIEW_ADMIN . DS . "nav.php"; ?>

        <?php 
            if($url == '/admin' || $url == '/admin/index.php') {
                include VIEW_ADMIN . DS . "dashboard.php"; 
            }

            if($url == '/admin/productos') {
                include VIEW_ADMIN . DS . "productos.php"; 
            }
        ?>
    </main>
    <?php if($url == '/admin' || $url == '/admin/index.php') : ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../js/chart.js"></script>
    <?php endif; ?>
    <?php if($url == '/admin/productos'): ?>
        <script src="../js/adminProdForm.js"></script>
    <?php endif; ?>
</body>
</html>