<?php

define('path', __DIR__);

include(path . "/core/configClass.php");
include(path . "/core/dbClass.php");
/*
$test2 = new configClass;
echo var_dump($test2->getDbConfig());
 * 
 */

$lolipop = new dbClass;

//echo var_dump($lolipop->test());

$q = dbClass::$db->query('SELECT * FROM coord_users');
while ($r = $q->fetch())
{
  echo $r['id'] . " | " . $r['username'] . " | " . $r['email'] . "<br>";
}


