<?php

class validateFormLogonModel
{
	protected $validatedLogonData = [];
	private $optArray = [
		'username' => [
			'filter' => FILTER_SANITIZE_ENCODED
		],
		'password'=>[
			'filter'=>FILTER_VALIDATE_REGEXP,
			'option' => [
				'regexp' => "/^[a-zA-Z0-9_-]{8,16}$/"
			]
		]
	];

	public function validateLogon()
	{
		$this->validatedLogonData = filter_input_array(INPUT_POST, $this->optArray);
		return $this;
	}

	public function getValidatedData()
	{
		return $this->validatedLogonData;
	}

}