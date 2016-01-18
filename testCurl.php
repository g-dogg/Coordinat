<?php
define('path', __DIR__);
include_once path.'/core/curlClass.php';

$tc = new curlClass;

$lol = $tc->setAddr("г.Омск, ул. Омская, 115");

$lol2 = $tc->getInfo();
echo var_dump($lol2);
