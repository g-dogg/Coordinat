<?php
//namespace controller;

class Controller
{
	public $view;
	public $model;

	public function __construct(View $view)
	{
		$this->view = $view;
	}

	public function testAction()
	{
		echo "Motherfuckah work!";
	}

 	public function indexAction()
 	{

 	}
}