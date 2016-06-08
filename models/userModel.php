<?php

class userModel extends Model
{
	private $id;
	private $user = [];
	private $userId;
	private $isAuthorized = false;
	private $db;


	public function __construct($userName = null, $password = null, Db $db)
	{
		$this->userName = $userName;
		$this->db = $db;
	}

	public static function isAuthorized()
	{
		if(!empty($_SESSION["userId"]))
		{
			return (bool)$_SESSION["userId"];
		}
		return FALSE;
	}

	public function getUserFromDb($userName)
	{
		$query = "SELECT * FROM users WHERE username = :username LIMIT 1";
		$handler = $this->db->prepare($query, PDO_FETCH_ASSOC);
		$handler->execute([
				"username" => $userName,
 			]);
		$this->user = $handler->fetchAll();
		if(!$this->user)
		{
			return FALSE;
		}
		return $this->user;

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

	public function authorize($username, $password, $rememberMe)
	{

		$query = "SELECT id, username FROM users WHERE username = :username LIMIT 1";
		$handler = $this->db->prepare($query);
		$handler->execute([
				"username" => $username,

			]);
		if(password_verify($password, $this->)
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

	public function newUser($userName, $password)
	{

		if($this->getUserNameFromDb($userName))
		{
			throw new \Exception("User exist: " . $userName, 1);

			$query = "INSERT INTO users SET (username, hash) values (:username, :hash)";
			$handler = $this->db->prepare($query);
			try
			{
				$this->db->beginTransaction();
				$result = $handler->execute([
					"username" => $userName,
					"hash" => password_hash($password, PASSWORD_DEFAULT)
				]);
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


}