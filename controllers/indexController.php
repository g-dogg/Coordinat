<?php

class indexController extends Controller
{
	public function indexAction()
	{
		$this->view->render('main', __FILE__);
	}
}