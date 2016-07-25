<?php

class validateFormLogonModel
{
	protected $validatedLogonData = [];
	private $optArray = [
		'username' => [
			'filter' => FILTER_SANITIZE_ENCODED
		],
		'password'=>[
			'filter'=>FILTER_SANITIZE_ENCODED

		],
	];

	public function validateLogon()
	{
		$this->validatedLogonData = filter_input_array(INPUT_GET, $this->optArray);
		return $this;
	}

	public function getValidatedData()
	{
		return $this->validatedLogonData;
	}

}