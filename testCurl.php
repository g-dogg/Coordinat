<?php
define('path', __DIR__);
include_once path.'/core/curlClass.php';
include_once path.'/core/jsonClass.php';

$tc = new curlClass('г.Омск, ул. Ленина, 10&results=1');
echo var_dump($tc) . "<br>";
/*
echo "<br><br><br>";
$js1 = ($tc->getInfo());
echo var_dump($js1);
echo "<br><br><br>";
*/

$js1 = '
{"response":{"GeoObjectCollection":{"metaDataProperty":{"GeocoderResponseMetaData":{"request":"г.омск, ул. Ленина, 10","found":"9","results":"1"}},"featureMember":[{"GeoObject":{"metaDataProperty":{"GeocoderMetaData":{"kind":"house","text":"Россия, Омск, улица Ленина, 10","precision":"exact","AddressDetails":{"Country":{"AddressLine":"Омск, улица Ленина, 10","CountryNameCode":"RU","CountryName":"Россия","AdministrativeArea":{"AdministrativeAreaName":"Омская область","SubAdministrativeArea":{"SubAdministrativeAreaName":"городской округ Омск","Locality":{"LocalityName":"Омск","Thoroughfare":{"ThoroughfareName":"улица Ленина","Premise":{"PremiseNumber":"10"}}}}}}}}},"description":"Омск, Россия","name":"улица Ленина, 10","boundedBy":{"Envelope":{"lowerCorner":"73.364682 54.981691","upperCorner":"73.381139 54.991155"}},"Point":{"pos":"73.37291 54.986423"}}}]}}}';
$jsonDecoded = json_decode($js1);
//echo var_dump($jsonDecoded);
echo $strC = $jsonDecoded->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;

function cuttingCoord($coordStr)
    {
      $coords = explode(" ", $coordStr);
      return $coords;
    }

echo var_dump(cuttingCoord($strC));