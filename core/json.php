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

    public function cuttingCoord()
    {
      $coords = explode(" ", $this->crdArr);
      return $coords;
    }
}