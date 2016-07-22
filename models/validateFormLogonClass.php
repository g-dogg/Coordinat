<?php

class validateFormLogonModel extends Model
{
	protected $validatedLogonData = [];
	private static $optArray = [
		'username' => [
			'filter' => FILTER_SANITIZE_ENCODE,
		],
		'password'=>[
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>[
				'regexp'=>'',
			],
		],
	];

	public function validateLogon()
	{
		$this->validatedLogonData = filter_input_array(INPUT_POST, self::optArray);
		return $this;
	}
}