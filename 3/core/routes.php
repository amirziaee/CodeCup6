<?php

use Core\Router;

$router = new Router();

$router->add('/','HomeController@index');
$router->add('/about-us','HomeController@about');
$router->add('/contact-us','HomeController@contact');


return $router;