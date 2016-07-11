<?php
/**
 * Description of jsonClass
 *
 * @author g-dogg
 */
class Json
{

    public $jsonString;
    public $coords = [];
    private $crdArr = [];
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
      $this->crdArr = $jsonDecoded->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
      return $this;
    }
    /**
     * [cuttingCoord description]
     * @return $this возвращает объект класса
     */
    public function cuttingCoord()
    {
      $coords = explode(" ", $this->crdArr);
      return $coords;
    }
}