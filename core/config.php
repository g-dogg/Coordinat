<?php

class Config
{
    private static $dbConfig = [
        'dsn'=>'mysql:host=localhost;dbname=coordinat',
            'username'=>'root',
            'password'=>'1234',
            'charset'=>'utf8'
	];

    public function getDbConfig()
    {
        return self::$dbConfig;
    }

    public static function getRootPath()
    {
        return "//".$_SERVER['SERVER_NAME']."/";
    }
    
    public static function getTitle()
    {
        echo "Найти IT";
    }
}