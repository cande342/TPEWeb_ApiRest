<?php
require_once 'config.php';
require_once 'libs/router.php';

require_once 'app/controllers/book.api.controller.php';
require_once 'app/controllers/user.api.controller.php';

// Instanciar router
$router = new Router();

#                 Endpoint              Verbo     Controller           Método
$router->addRoute('libros',             'GET',    'BookApiController', 'get');
$router->addRoute('libros/:ID',         'GET',    'BookApiController', 'get');
$router->addRoute('libros/autor/:ID_A', 'GET',    'BookApiController', 'get');
$router->addRoute('libros',             'POST',   'BookApiController', 'create');
$router->addRoute('libros/:ID',         'PUT',    'BookApiController', 'update');

$router->addRoute('user/token',         'GET',    'UserApiController', 'getToken');

# htaccess resource=(), llamar a GET/POST/PUT/...
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);