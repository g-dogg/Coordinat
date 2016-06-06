<?php

class Db
{
  private $config;

  public function __construct(Config $config)
  {
    $this->config = $config;
  }

  private $dbConfig = [
     'dsn'=>'mysql:host=localhost;dbname=coordinat',
  		'username'=>'root',
  		'password'=>'1234',
  		'charset'=>'utf8',
  	];

  private $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];

  public static function connect()
  {
      try
      {

        $db = new PDO($dbConfig['dsn'], $dbConfig['username'], $dbConfig['password'], $opt);
        //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET CHARACTER_SET_CLIENT={$dbConfig['charset']}");
        $db->exec("SET CHARACTER_SET_RESULTS={$dbConfig['charset']}");
        $db->exec("SET COLLATION_CONNECTION='utf8_general_ci'");
      }
      catch (PDOException $e)
      {
          //
        echo $e->getMessage();
      }
    }
}