<?php
use Routing\Router;

include_once 'header.php';
require 'vendor/autoload.php';

$host = 'http://192.168.7.7';
$router = new Router($host);



include_once 'footer.php';