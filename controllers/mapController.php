<?php

class mapController extends Controller
{
	public function indexAction()
	{
		if(FALSE === userModel::isAuthorized())
		{
			#throw new Exception ("Вы не авторизованы. Зарегистрируйтесь или войдите!");
			$this->view->render('login');
			#header('location: http://' . $_SERVER['http_host'] . '/');
		}
		else
		{
			$this->view->mapRender('mapIndex');
		}

	}
}