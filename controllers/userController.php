<?php

class userController extends Controller
{
	public function actionIndex()
	{
		$this->view->render('userIndex');
	}

	public function registerUserAction($username, $password)
	{
		//$this->model->newUser($username, $password); //передать json из формы
            echo $post = $_POST;
            
	}
}