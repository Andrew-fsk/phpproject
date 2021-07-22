<?php

define("SQL_BASE", "phpproject");
define("SQL_LOGIN", "phpproject");
define("SQL_PWD", "phpproject");
define("SQL_HOST", "localhost");

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("MODEL_PATH", ROOT . "/models/");
define("VIEW_PATH", ROOT . "/views/");
define("TEMPLATE_PATH", ROOT . "/templates/");
define("LIBS_PATH", ROOT . "/libs/");

require_once ("db.php");
require_once ("route.php");
require_once MODEL_PATH . 'Model.php';
require_once VIEW_PATH . 'View.php';
require_once CONTROLLER_PATH . 'Controller.php';

Routing::buildRoute();