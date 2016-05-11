<?php
/**
 * Description of formUserClass
 *
 * @author g-dogg
 */
class formUserRegClass
{
    private $username;
    private $email;
    private $password;
    private $regUserDataArray = [];
    private $optPwd = ['regexp' => "/^[a-zA-Z0-9_-]{8,16}$/"];
    private $arguments = []; //не сегодня
    
    public function setUserData()
    {
        $this->username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $this->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $this->password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, $this->optPwd);
    }
    
    public function getUserDataArray()
    {
        return $this->regUserDataArray = [
            'user'  => $this->username,
            'pwd'   => $this->password,
            'email' => $this->email
        ];
    }
}