<?php

class userController extends Controller
{
	public function actionIndex()
	{
		$this->view->render('userIndex');
	}

	public function registerUser()
	{
		$this->model->newUser(); //передать json из формы
	}
}