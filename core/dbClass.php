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
      }
      catch (PDOException $e)
      {
          //
      }
    }
}