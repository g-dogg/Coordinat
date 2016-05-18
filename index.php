<?php
use Routing\Router;
include_once 'bootstrap.php';

$host = 'http://localhost';
$router = new Router($host);
echo $_SERVER['REQUEST_URI'];
$router->add('/', '/', 'controller:index');

echo "<br>eshe odin lol";


