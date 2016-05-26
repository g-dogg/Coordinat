<?php
//namespace controller;

class Controller
{
	protected $view;
	public $model;

	public function __construct(View $view)
	{
		$this->view = $view;
	}

 	public function indexAction()
 	{

 	}
}