<?php 
    ob_start();

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("VIEW_LAYOUT") ? null : define("VIEW_LAYOUT", __DIR__ . DS . "views" . DS . "layout");

    defined("VIEW_LAND") ? null : define("VIEW_LAND", __DIR__ . DS . "views" . DS . "landing");

    defined("VIEW_AUTH") ? null : define("VIEW_AUTH", __DIR__ . DS . "views" . DS . "auth");

    defined("VIEW_ADMIN") ? null : define("VIEW_ADMIN", __DIR__ . DS . "views" . DS . "admin");

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    require_once 'utils/util.php';
?>