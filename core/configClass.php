<?php
	/**
	*
	*/
class configClass
{
  private static $dbConfig = [
    'dsn'=>'mysql:host=localhost;dbname=coordinat',
		'username'=>'root',
		'password'=>'1234',
		'charset'=>'utf8',
	];

	public function getDbConfig()
	{
    return self::$dbConfig;
	}
}