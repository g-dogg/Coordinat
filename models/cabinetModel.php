<?php

class cabinetModel extends Model
{
	private $addressArr = [];
	/**
	 * [setAddressArray description]
	 */
	public function setAddressArray()
    {
        $this->addressArr = filter_input_array(INPUT_POST, $this->optArray);
    }
}