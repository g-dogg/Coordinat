<?php
/**
 * Description of jsonClass
 *
 * @author g-dogg
 */
class jsonClass 
{
    public $jsonString;
    public $jsonDecoded;
    public $coords = [];
            
    function __construct($json)
    {
      $this->jsonString = $json;
    }
    
    public function getJson()
    {
      return $this->jsonString;
    }
    
    public  static function Olol()
    {
      return "ololo";
    }
    
    public static function parsingJson()
    {
      $this->jsonDecoded = json_decode($this->jsonString);
      return $this->jsonDecoded->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
    }
    
    public function cuttingCoord()
    {
      $coords = explode(" ", self::parsingJson());
      return $coords;         
    }
}
