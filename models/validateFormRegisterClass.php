<?php

class validateFormRegisterClass
{
	/**
	 * [$validatedUserData description]
	 * @var array
	 */
	private $validatedUserData =  [];
	/**
	 * [$optArray description]
	 * @var [type]
	 */
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
				'regexp'=>'((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,16})',
			]
		]
	];

	/**
	 * [validateUserForm description]
	 * @return [type] [description]
	 */
	public function validateUserForm()
	{
		$this->validatedUserData = filter_input_array(INPUT_POST, self::$optArray);
		return $this;
	}

	/**
	 * [getValidatedUserData description]
	 * @return [type] [description]
	 */
	public function getValidatedUserData()
	{
		return  $this->validatedUserData;
	}
}