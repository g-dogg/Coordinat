<?php
/**
 * Description of jsonClass
 *
 * @author g-dogg
 */
class json 
{
    
    public $jsonString;
    public $coords = [];
    /*        
    function __construct($json)
    {
      $this->jsonString = $json;
    }
    */
    
    public function setJson($json)
    {
      $this->jsonString = $json;
    }
    public function getJson()
    {
      return $this->jsonString;
    }
       
    public function parsingJson()
    {
      $jsonDecoded = json_decode($this->jsonString);
      return $jsonDecoded->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
    }
    
    public function cuttingCoord()
    {
      $coords = explode(" ", $this->parsingJson());
      return $coords;         
    }
}