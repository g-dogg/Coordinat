<?php
namespace coordinat;

use \core\test\test;

include_once 'header.php';

include_once 'bootstrap.php';
//include_once 'core/test.php';

$tst = new test;
echo $tst->testHello();


include_once 'footer.php';
