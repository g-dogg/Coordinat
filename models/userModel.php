<?php

class userModel extends Model
{
	private $id;
	private $user = [];
	private $userId;
	private $isAuthorized = false;
	//private $db;
/*

	public function __construct()
	{
		parent::__construct();
		//$this->userName = $userName;
	}
*/
	public static function isAuthorized()
	{
		if(!empty($_SESSION["userId"]))
		{
			return (bool)$_SESSION["userId"];
		}
		return FALSE;
	}

	/**
	 *
	 * @param string $userName
	 * @return boolean. True if user exists, and false if not.
	 */
	public function isUserExist($userName, $email)
	{
	    if(!empty($this->getUserFromDb($userName, $email)->getUser()))
	    {
	        return TRUE;
	    }
	    return FALSE;
	}

	private function getUserFromDb($userName = NULL, $email = NULL)
	{
		$query = "SELECT * FROM users WHERE username = :username OR email = :email LIMIT 1";
		$handler = $this->db->prepare($query);
		$handler->execute([
				"username" => $userName,
				"email"        => $email
 			]);
		$this->user = $handler->fetchAll();

		return $this;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function passwordHash($password)
	{
		try
		{
			$passwordHashed = password_hash($password, PASSWORD_DEFAULT);
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
		return $passwordHashed;
	}

	public function authorize($userName, $password, $rememberMe)
	{

		$this->getUserFromDb($userName, $email);
		if(FALSE === password_verify($password, $this->user['password']))
		{
			$this->isAuthorized = FALSE;
		}
		else
		{
			$this->isAuthorized = TRUE;
			$this->user['id'];
			$this->saveSession($rememberMe);
		}
		return $this->isAuthorized;
	}

	public function logout()
	{
		if(!empty($_SESSION["userId"]))
		{
			unset($_SESSION["userId"]);
		}
	}

	public function saveSession($rememberMe = FALSE, $httpOnly = TRUE, $days = 7)
	{
		$_SESSION["userId"] = $this->userId;

		if($rememberMe)
		{
			$sid = session_id();
			$expire = time() + $days * 24 * 3600;
			$domain = "";
			$secure = FALSE;
			$path = "/";

			$cookie  = setcookie("sid", $sid, $expire, $path, $domain, $secure, $httpOnly);
		}
	}

	public function newUser($userName, $password, $email)
	{

		if(FALSE === $userName or FALSE === $email)
		{
			throw new Exception("Error Processing Request", 1);
		}

		if(FALSE === $this->isUserExist($userName, $email))
		{
			//throw new \Exception("User exist: " . $userName, 1);

			$query = "INSERT INTO coordinat.`users` (`username`, `email`, `password`) values (:username, :email, :hash)";

			$handler = $this->db->prepare($query);
			try
			{
				$this->db->beginTransaction();
				$result = $handler->execute([
					"username" => $userName,
					"email" => $email,
					"hash" => password_hash($password, PASSWORD_DEFAULT)
				]);
				$this->userId = $this->db->lastInsertId();
				$this->db->commit();
			}
			catch (\PDOException $e)
			{
				$this->db->rollBack();
				echo $e->getMessage();
				die();
			}

			if(!$result)
			{
				$info = $handler->errorInfo();
				printf("Data error %d %s", $info[1], $info[2]);
				die();
			}
		}
	}

	public function activateUser($userName)
	{
		$user = $this->getUserFromDb($userName);
		if(!$user)
		{
			throw new Exception("Error Processing Request", 1);
		}
		else
		{
			echo md5($user->user['id']);
		}
	}

	public function changePwd()
	{
		if(FALSE === $this->isAuthorized)
		{
			throw new Exception("Error Processing Request", 1);
		}
		else
		{
			$pwdValidate = new validateFormPasswordClass;
			$pwdValidate->validatePwd();

		}
	}


}