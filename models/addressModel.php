<?php

class addressModel extends Model
{
	//TODO: свойства по полям таблицы, методы получения и установки . метод проверки и запроса координат. добавление новых записей
    private $fullAddress = [];
    private $serviceUrl = 'https://geocode-maps.yandex.ru/1.x/?format=json&geocode=';
    
    
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
        $addrForReq = $this->fullAddress['town'] . $this->fullAddress['street'] . " "; //TODO: допилить склейку адреса для запроса
    }
    
    public function requestNewCoords()
    {
        $curl = new Curl($this->serviceUrl, $this->fullAddress);
    }
}