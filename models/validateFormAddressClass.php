<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validateFormAddressModel
 *
 * @author g-dogg
 */
class validateFormAddressModel extends Model
{
    private $zipcode;
    private $town;
    private $street;
    private $build;
    private $housing;
    private $addressArr = [];
    
    private $optArray = [
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
    
    public function setAddressArray()
    {
        $this->addressArr = filter_input_array(INPUT_POST, $this->optArray);
    }
    
    public function getAddresArray()
    {
        return $this->addressArr;
    }
}
