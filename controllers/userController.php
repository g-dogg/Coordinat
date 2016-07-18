<?php

class userController extends Controller
{
	public function actionIndex()
	{
		$this->view->render('userIndex');
	}

	public function registerUserAction()
	{
		/*$this->model->newUser($username, $password); //передать json из формы
            var_dump($_POST);
            return $data['success'];
            */
           	try
           	{
           		$fh = fopen('log.txt', 'w');
           	}
            catch (Exception $e)
            {
            	echo $e;
            }
            fputs($fh, $_POST['username']);
            fclose($fh);
	}
}