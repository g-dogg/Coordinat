<?php

class validateFormPasswordClass
{
	protected $validatedPwd = [];
	private static $optArray = [
		'oldPassword'=>[
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>[
				'regexp'=>'',
			],
		],
		'newPassword'=>[
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>[
				'regexp'=>'',
			],
		],
		'confirmNewPassword'=>[
			'filter'=>FILTER_VALIDATE_REGEXP,
			'options'=>[
				'regexp'=>''
			]
		]
	];

	public function validatePwd()
	{
		$this->validatedPwd = filter_input_array(INPUT_POST, self::optArray);
		return $this;
	}


	private function checkOldPwd()
    	{
    		$query = 'SELECT hash FROM users WHERE id = :userID';
    		$handler = $db->prepare($query);
    		$handler->execute(array('userID' => $this->userID ));
    		$hashFromDb = $handler->fetch(PDO::FETCH_ASSOC);
    		if(!password_verify($this->validatedPwd[1], $hashFromDb))
    		{
    			return FALSE;
    		}
    		return TRUE;
    	}

    	public function changePassword()
    	{
    		if(!$this->checkOldPwd())
    		{
    			return FALSE; //throw new exception
    		}
    		$query = 'UPDATE  users SET  passwordHash=:pwdHash WHERE id = :userID';
    		$handler = $db->prepare($query);
    		$handler->execute(['pwdHash'=>password_hash($this->validatedPwd[1], PASSWORD_DEFAULT), 'userID'=>$userID]);
    		//TODO: вернуть статус

    	}
}