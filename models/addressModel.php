<?php

class addressModel extends Model
{
	//TODO: свойства по полям таблицы, методы получения и установки . метод проверки и запроса координат. добавление новых записей
    private $fullAddress = [];
    
    public function setNewFullAddress()
    {
        $query = "SELECT * FROM towns, address, coordinats
                  WHERE towns.id = address.townid AND 
                  address.coordinat.id = coordinats.id AND 
                  coordinats.status = 0 LIMIT 1";
        $handler = $this->db->query($query, PDO::FETCH_ASSOC);
        $this->fullAddress = $handler->fetch();
        return $this;
    }
    
}