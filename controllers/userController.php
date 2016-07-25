<?php

class userController extends Controller
{
	public function actionIndex()
	{
		$this->view->render('userIndex');
	}

	public function logonAction()
	{
		/*$this->model->logonUser($username, $password); //передать json из формы
            var_dump($_POST);
            return $data['success'];
            */

           $vL = new validateFormLogonModel;
           $vL->validateLogon();
           $op = $vL->getValidatedData();

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
            //fputs($fh, var_dump($vL));
            fclose($fh);

            echo json_encode($peremTest1);
	}

	public function testValAction()
	{
		var_dump($_REQUEST);
		echo "<br><hr><br>";
		$Lol = new validateFormLogonModel;
		$Lol->validateLogon();

		var_dump($Lol);

		foreach($Lol->getValidatedData() as  $k => $v)
		{
			echo $k . "=>" . $v;
		}

		$t3 = new jsonModel(NULL, $Lol->getValidatedData());
		$t4 =  $t3->encodeUserJson();
		var_dump($t3);
	}
}