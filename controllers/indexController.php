<?php

class indexController extends Controller
{
	public function indexAction()
	{
            $this->view->render('main', __CLASS__);
	}

	/**
	 * [mapAction description]
	 * @return [type] [description]
	 */
	public function mapAction()
	{
		//TODO: сделать передачу данных о местоположении открывающего карту
		$this->view->render('map');
	}
}