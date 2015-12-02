<?php

define('path', __DIR__);

include(path . '/core/configClass.php');
include(path . '/core/dbClass.php');
include_once 'header.php';
include_once 'regform.php';

$lolipop = new dbClass;

$q = dbClass::$db->query('SELECT * FROM coord_users');
while ($r = $q->fetch())
{
  echo $r['id'] . " | " . $r['username'] . " | " . $r['email'] . "<br>";
}
include_once 'footer.php';