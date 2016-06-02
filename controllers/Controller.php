<?php
//namespace controller;

class Controller
{
	protected $view;
	protected $model;

	public function __construct(View $view, Model $model)
	{
		$this->view = $view;
            $this->model = $model;
	}

 	public function indexAction()
 	{

 	}
}