<?php 
    ob_start();

    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    defined("VIEW_LAND") ? null : define("VIEW_LAND", __DIR__ . DS . "views" . DS . "landing");

    defined("VIEW_AUTH") ? null : define("VIEW_AUTH", __DIR__ . DS . "views" . DS . "auth");

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    require_once 'utils/util.php';
?>