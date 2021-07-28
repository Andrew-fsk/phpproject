<?php

/**
 * Routing class
 */

class Routing
{


    public static function buildRoute()
    {
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $route = array_values(array_diff(explode("/", $_SERVER['REQUEST_URI']), array('')));

        /* Check controller*/
        if (!count($route)) {
            Routing::indexPage();
        } else if (file_exists(CONTROLLER_PATH . ucfirst($route[0] . "Controller") . ".php")) {
            $controllerName = ucfirst($route[0] . "Controller");
            $modelName = ucfirst($route[0] . "Model");

            include CONTROLLER_PATH . $controllerName . ".php";
            include MODEL_PATH . $modelName . ".php";


            if ($route[1]) {
                $action = $route[1];
            }

            $controller = new $controllerName();
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                Routing::errorPage();
            }

        } else if (file_exists(TEMPLATE_PATH . 'pages/' . str_replace('.html', '', $route[0]) . ".tpl")) {
            $route[0] = str_replace('.html', '', $route[0]);
            $action = "textPage";

            include CONTROLLER_PATH . $controllerName . ".php";
            include MODEL_PATH . $modelName . ".php";

            $controller = new $controllerName();
            $controller->$action(TEMPLATE_PATH . 'pages/' . $route[0] . ".tpl", $route[0]);
        } else {
            Routing::errorPage();
        }
    }

    public function errorPage()
    {
        include CONTROLLER_PATH . "IndexController.php";
        include MODEL_PATH . "IndexModel.php";
        $controller = new IndexController();
        $controller->errorPage();
    }

    public function indexPage()
    {
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        include CONTROLLER_PATH . $controllerName . ".php";
        include MODEL_PATH . $modelName . ".php";

        $controller = new $controllerName();
        $controller->$action();
    }
}