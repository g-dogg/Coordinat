<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jsonModel
 *
 * @author g-dogg
 */
class jsonModel  extends Model
{
	private $json;
	private $data;
	private $coords;
	private $cuttedCoordinat = [];

	public function __construct($json = NULL, $data = NULL)
	{
		$this->json = $json;
		$this->data = $data;
	}

	public function getjson()
	{
		return $this->json;
	}
	/**
	 * [parseJsonForCoord description]
	 * @return object возвращает экземпляр класса jsonModel
	 */
	public function parseJsonForCoord()
	{
		$jsonDecoded = json_decode($this->json);
      	$this->coords = $jsonDecoded->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
      	return $this->coords;
	}

	public function cuttingCoord()
    	{
      	$this->cuttedCoordinat = explode(" ", $this->parseJsonForCoord());
      	return $this;
    	}

    	public function parseUserJson()
    	{
    		$jsonDecoded = json_decode($this->json);
    	}


    	public function encodeUserJson()
    	{
    		$this->json = json_encode($this->data);
    		return $this->json;
    	}
}
