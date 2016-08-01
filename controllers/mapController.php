<?php

class mapController extends Controller
{
	public function indexAction()
	{
		$this->view->mapRender('mapIndex');
	}
}