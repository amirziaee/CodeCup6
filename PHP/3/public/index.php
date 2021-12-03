<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../core/routes.php';

if (is_file(__DIR__ . '/..' . $_SERVER['REQUEST_URI'])) {
	return false;
}

$router->dispatch($_SERVER['REQUEST_URI']);
