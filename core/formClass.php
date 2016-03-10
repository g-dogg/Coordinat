<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of formClass
 *
 * @author Ilyash
 */
class formClass
{
  private $filteredArray = [];
  private $userArray    = [];
  private $args = [
      'username'  => FILTER_SANITIZE_STRING,
      'email'     => FILTER_VALIDATE_EMAIL,
      'zipcode'   => [
        'filter'  => FILTER_VALIDATE_INT,
        'options' => [
            'min_range' => 644000,
            'max_range' => 644999
        ],
      ],
      'street'    => FILTER_SANITIZE_ENCODED,
      'build'     => FILTER_VALIDATE_INT,
      'housing'   => FILTER_SANITIZE_ENCODED
  ];
  
  public function validateFormData()
  {
    try 
    {
      $this->filteredArray = filter_input_array(INPUT_GET, $this->args);
    } 
    catch (Exception $ex) 
    {
       echo "Ошибка входных данных: " . $ex->getMessage();
    }
    return $this->filteredArray;
  }
    
  public function postArray()
  {
    foreach ($_REQUEST as $key => $value)
    {
      $this->addressArray[$key] = $value;
    }
  }
  
  public  function getPostArray()
  {
    return $this->filteredArray;
  }
  
}

$pCl = new formClass;
//$pCl->postArray();
$pCl->validateFormData();
echo var_dump($pCl);

