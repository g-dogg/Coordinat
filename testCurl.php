<?php

include 'core/curlClass.php';

$tc = new curlClass();

$adrTest = $tc->setAddr("Омска, 122");

echo $tc->getInfo();
