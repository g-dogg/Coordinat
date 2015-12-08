<?php

define('path', __DIR__);

include(path . '/core/configClass.php');
include(path . '/core/dbClass.php');
include(path . '/core/jsonClass.php');
include_once 'header.php';
include_once 'regform.php';

$lolipop = new dbClass;

$q = dbClass::$db->query('SELECT * FROM coord_users');
while ($r = $q->fetch())
{
  echo $r['id'] . " | " . $r['username'] . " | " . $r['email'] . "<br>";
}

$a = '{"response":{"GeoObjectCollection":{"metaDataProperty":{"GeocoderResponseMetaData":{"request":"Омск, 33 северная 122","found":"1","results":"10"}},"featureMember":[{"GeoObject":{"metaDataProperty":{"GeocoderMetaData":{"kind":"house","text":"Россия, Омск, Амурский поселок, 33-я Северная улица, 122","precision":"exact","AddressDetails":{"Country":{"AddressLine":"Омск, Амурский поселок, 33-я Северная улица, 122","CountryNameCode":"RU","CountryName":"Россия","AdministrativeArea":{"AdministrativeAreaName":"Омская область","SubAdministrativeArea":{"SubAdministrativeAreaName":"городской округ Омск","Locality":{"LocalityName":"Омск","DependentLocality":{"DependentLocalityName":"Амурский поселок","Thoroughfare":{"ThoroughfareName":"33-я Северная улица","Premise":{"PremiseNumber":"122"}}}}}}}}}},"description":"Амурский поселок, Омск, Россия","name":"33-я Северная улица, 122","boundedBy":{"Envelope":{"lowerCorner":"73.398207 55.024714","upperCorner":"73.414664 55.034167"}},"Point":{"pos":"73.406435 55.029441"}}}]}}}';

$testjson = new jsonClass($a);


//echo var_dump($testjson);
echo "<br><br>";
echo $testjson::Olol();
echo "<br><br>";
echo var_dump($testjson::parsingJson());
echo var_dump($testjson->cuttingCoord());
include_once 'footer.php';