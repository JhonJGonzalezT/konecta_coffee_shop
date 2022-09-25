<?php
function loadController($controller)
{
    $nameController = ucwords(strtolower($controller)) . 'Controller';
    $fileController = 'controllers/' . $nameController . '.php';
    if (!is_file($fileController)) {
        $nameController = DEFAULT_CONTROLLER . 'Controller';
        $fileController = 'controllers/' . DEFAULT_CONTROLLER . 'Controller.php';
    }
    require_once $fileController;
    return new $nameController();
}
function loadAction($controller, $action, $id = null)
{
    if (!isset($action) || !method_exists($controller, $action)) {
        $action = DEFAULT_ACTION;
    }
    if ($id == null) {
        $controller->$action();
    } else {
        $controller->$action($id);
    }
}