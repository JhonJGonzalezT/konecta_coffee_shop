<?php
require_once "config/config.php";
require_once "core/route.php";
require_once "config/db.php";
require_once "controllers/ProductsController.php";

if (isset($_GET['controller'])) {
    $controller = loadController($_GET['controller']);
    if (isset($_GET['action'])) {
        if (isset($_GET['id'])) {
            loadAction($controller, $_GET['action'], $_GET['id']);
        } else {
            loadAction($controller, $_GET['action']);
        }
    } else {
        loadAction($controller, DEFAULT_ACTION);
    }
} else {
    $controller = loadController('Products');
    $action = DEFAULT_ACTION;
    $controller->$action();
}