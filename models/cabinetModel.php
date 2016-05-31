<?php

class cabinetModel extends Model
{
	private $userID;


	private $optionsAddress = [
		'zipcode' => [
            'filter' => FILTER_VALIDATE_INT,
            'flags' => FILTER_REQUIRE_ARRAY,
            'options' => [
                'min_range' => 000000,
                'max_range' => 999999
            ]
        ],
        'town' => FILTER_SANITIZE_ENCODED,
        'street' => FILTER_SANITIZE_ENCODED,
        'build' => [
            'filter' => FILTER_VALIDATE_INT,
            'flags' => FILTER_REQUIRE_ARRAY,
            'options' => [
                'min_range' => 1,
                'max_range' => 999
            ],
        'housing' => FILTER_SANITIZE_ENCODED
        ]
	];

	private $optionsProblem = [
		'theme' => [
			'filter' => FILTER_SANITIZE_ENCODED,
		],
		'problemText' => [
			'filter' => FILTER_SANITIZE_ENCODED,
		]
	];
	private $addressArr = [];
	private $problemArr = [];
	private $pwdArray = [];
	/**
	 * [setAddressArray description]
	 */
	public function __construct($userID)
	{
		$this->userID = $userID;
	}

	public function setAddressArray()
    	{
      	$this->addressArr = filter_input_array(INPUT_POST, $this->optionsAddress);
    	}

    	public function setProblemArray()
    	{
    		$this->problemArr = filter_input_array(INPUT_POST, $this->optionsProblem);
    	}

    	public function setPwdArray()
    	{
    		return filter_input_array(INPUT_POST,$this->optionsPwd);
    	}

    	public function checkOldPwd()
    	{
    		$this->pwdArray = $this->setAddressArray();
    		$query = 'SELECT hash FROM users WHERE id = :userID';
    		$handler = $db->prepare($query);
    		$handler->execute(array('userID' => $this->userID ));
    		$hashFromDb = $handler->fetch(PDO::FETCH_ASSOC);
    		if(!password_verify($this->pwdArray[0], $hashFromDb))
    		{
    			return FALSE;
    		}
    		return TRUE;

    	}

    	public function changePassword()
    	{
    		if(!$this->checkOldPwd())
    		{
    			return FALSE;
    		}


    	}



}