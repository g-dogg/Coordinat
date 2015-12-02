<?php

use configClass;

/**
*
*/
define('path', __DIR__);
include(path . "/core/configClass.php");

class dbClass
{
   public static $db = false;
   protected $config;
               
    function __construct()
    {
      if(self::$db === false)
      {
        $this->connect();
      }
    }
    
    public function test()
    {
        $this->cc = new configClass;
        $confArray = $this->cc->getDbConfig();
        return $confArray['dsn'];
    }
       
    private function connect()
    {
      try
      {
        $this->config = new configClass;
        $confArray = $this->config->getDbConfig();
        self::$db = new PDO($confArray['dsn'], $confArray['username'], $confArray['password']);
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db->exec("SET CHARACTER_SET_CLIENT='utf8'");
        self::$db->exec("SET CHARACTER_SET_RESULTS='utf8'");
        self::$db->exec("SET COLLATION_CONNECTION='utf8_general_ci'");
      }
      catch (PDOException $e)
      {
          //
        echo $e->getMessage();
      }
    }
}