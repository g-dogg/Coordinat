<?php

class validateFormRegisterClass
{

	private $validatedUserData =  [];

	private static $optArray = [
		'username' => [
			'filter' => FILTER_SANITIZE_ENCODED,
		],
		'email' => [
			'filter' => FILTER_VALIDATE_EMAIL,
		],
		'password' => [
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>[
				'regexp'=>'.*',
		]
	];

	public function validateUserForm()
	{
		$this->$validatedUserData = filter_input_array(INPUT_POST, self::$optArray);
	}
}