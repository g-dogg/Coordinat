<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validateFormModel
 *
 * @author g-dogg
 */
class validateProblemFormModel extends Model
{
	private $arguments = [
		'theme' => [
			'filter' => FILTER_SANITIZE_ENCODED,
			'flags' =>'',

		],
		'problemText' => [
			'filter' => FILTER_SANITIZE_ENCODED,
			'flags' => ''
		]
	];

	public function validateForm() //сюда скорее всего передать объект типа Controller
	{
		return filter_input_array(INPUT_POST, $this->arguments);
	}




}
