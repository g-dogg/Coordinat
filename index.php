<?php

include_once 'header.php';
require 'vendor/autoload.php';

$testing = new curl("Омск, Звездова, 101");
$js1 = new json;
$js1->setJson($testing);
$js1->parsingJson();
echo var_dump($js1->cuttingCoord());


include_once 'footer.php';
