<?php

class addressModel extends Model
{
	//TODO: свойства по полям таблицы, методы получения и установки . метод проверки и запроса координат. добавление новых записей
    private $fullAddress = [];
    private $serviceUrl = 'https://geocode-maps.yandex.ru/1.x/?format=json&geocode=';
    private $newCoords = [];


    public function setNewFullAddress()
    {
        $query = "SELECT * FROM towns, address, coordinats
                  WHERE towns.id = address.townid AND
                  address.coordinat.id = coordinats.id AND
                  coordinats.status = 0 LIMIT 1";
        $handler = $this->db->query($query, PDO::FETCH_ASSOC);
        $this->fullAddress = $handler->fetch();
    }

    public function getNewFullAddress()
    {
        return $this->fullAddress;
    }

    public function getAddressToRequest()
    {
        $addrForReq = $this->fullAddress['town'] . $this->fullAddress['street'] . ", " . $this->fullAddress['build'] . ", " . $this->fullAddress['housing']; //может и не housing, а corp
        return $addrForReq;
    }

    public function requestNewCoords()
    {
        $curl = new Curl($this->serviceUrl, $this->getAddressToRequest());
        $json = new jsonModel($curl->getContent()->getInfo(), NULL);
        $this->newCoords = $json->cuttingCoord()->getCuttedCoords();
    }

    public function getNewCoords()
    {
        return $this->newCoords;
    }

    //TODO: функция вставки долготы и широты в базу в поля запрошенного адреса "...where address id = $this->fullAddress['id']". как-то так
}