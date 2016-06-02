<?php

class cabinetModel extends Model
{
	protected $userID;
	protected $validatePwd;
	private $addressArr = [];
	private $problemArr = [];
	private $pwdArray = [];


	public function __construct()
	{
		$this->validatePwd = new validateFormPasswordClass;
	}


}