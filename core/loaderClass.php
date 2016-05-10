<?php

class loaderClass
{
	private $requestUrl;
	private $componentsArray = [];

	function __constructor()
	{
		$this->requestUrl = $_SERVER['REQUEST_URI'];
	}

	public function getUrlComponents()
	{
		$this->componentsArray = explode("/", $this->requestUrl);
	}

}