<?php

class userController extends Controller
{
	public function actionIndex()
	{
		$this->view->render('userIndex');
	}

	public function registerUser()
	{
		$userModel = new userModel();

	}
}