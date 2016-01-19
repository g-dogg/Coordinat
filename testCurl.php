<?php
define('path', __DIR__);
include_once path.'/core/curlClass.php';
include_once path.'/core/jsonClass.php';

$tc = new curlClass("г.Омск, ул. Омская, 115&results=1");

/*
echo "<br><br><br>";
$js1 = ($tc->getInfo());
echo var_dump($js1);
echo "<br><br><br>";
*/

$js1 = '
{"response":{"GeoObjectCollection":{"metaDataProperty":{"GeocoderResponseMetaData":{"request":"г.Омск, ул. Омская, 115","found":"6","results":"1"}},"featureMember":[{"GeoObject":{"metaDataProperty":{"GeocoderMetaData":{"kind":"house","text":"Россия, Омск, Омская улица, 115","precision":"exact","AddressDetails":{"Country":{"AddressLine":"Омск, Омская улица, 115","CountryNameCode":"RU","CountryName":"Россия","AdministrativeArea":{"AdministrativeAreaName":"Омская область","SubAdministrativeArea":{"SubAdministrativeAreaName":"городской округ Омск","Locality":{"LocalityName":"Омск","Thoroughfare":{"ThoroughfareName":"Омская улица","Premise":{"PremiseNumber":"115"}}}}}}}}},"description":"Омск, Россия","name":"Омская улица, 115","boundedBy":{"Envelope":{"lowerCorner":"73.394551 54.986077","upperCorner":"73.411008 54.99554"}},"Point":{"pos":"73.402779 54.990809"}}}]}}}';
$jsonDecoded = json_decode($js1);
//echo var_dump($jsonDecoded);
echo $strC = $jsonDecoded->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;

function cuttingCoord($coordStr)
    {
      $coords = explode(" ", $coordStr);
      return $coords;         
    }
    
echo var_dump(cuttingCoord($strC));