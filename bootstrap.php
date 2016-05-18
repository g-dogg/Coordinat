<?php
use Routing\Router;
require 'vendor/autoload.php';
include 'Routing/Router.php';
include 'controllers/controller.php';
include 'views/view.php';

$view = new View;
$controller = new Controller($view);
