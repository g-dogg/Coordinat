<?php
	
        $dbHost = 'localhost';
	$dbName = 'findit';
	$dbUser = 'root';
	$dbPasswd = '1234';

        try
        {
            $DBH = new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPasswd);
            $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $DBH->exec("SET CHARACTER_SET_CLIENT='utf8'");
            $DBH->exec("SET CHARACTER_SET_RESULTS='utf8'");
            $DBH->exec("SET COLLATION_CONNECTION='utf8_general_ci'");
        } 
        catch (PDOException $ex)
        {
            echo $ex->getMessage();
        }