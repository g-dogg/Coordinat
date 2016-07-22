<?php

class userController extends Controller
{
	public function actionIndex()
	{
		$this->view->render('userIndex');
	}

	public function logonAction()
	{
		/*$this->model->newUser($username, $password); //передать json из формы
            var_dump($_POST);
            return $data['success'];
            */

           $peremTest1 = isset($_REQUEST['username']) ? $_REQUEST['username'] : 'ниx не пашет';

           	try
           	{
           		$fh = fopen('log.txt', 'a+');
           	}
            catch (Exception $e)
            {
            	echo $e;
            }
            fputs($fh, $peremTest1);
            fclose($fh);

            echo json_encode($peremTest1);
            var_dump($_REQUEST);
	}
}