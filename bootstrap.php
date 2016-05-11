<?php
    namespace coordinat;
	require_once 'SplClassLoader.php';
        
        $path = __DIR__;
        echo $path;

        $classLoader = new SplClassLoader('coordinat\core', $path);
        $classLoader->register();

         