<?php
namespace Coordinat;
use \Coordinat\core\test;
//include_once 'core/test.php';

include_once 'header.php';

include_once 'bootstrap.php';


$tst = new \Coordinat\core\test\test;
echo $tst->testHello();


include_once 'footer.php';
