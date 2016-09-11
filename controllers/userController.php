<?php

class userController extends Controller
{
    public function actionIndex()
    {
    $this->view->render('userIndex');
    }

    public function logonAction()
    {
      $vL = new validateFormLogonModel;
      $vL->validateLogon();
      $userData = $vL->getValidatedData();

      $enteredPwd = $this->model->passwordHash($userData['password']);
      try
      {
        $userData['authorized'] = $this->model->authorize($userData['username'], $enteredPwd);
      }
      catch(Exception $e)
      {
        echo $e;
      }

      $json = new jsonModel(NULL, $userData);
      echo $json->encodeUserJson();
    }

    public function registerAction()
    {
    //TODO тут пое*** из модели
      //$validatedData = new validateFormPassword;
        echo "Start!";
        $var1 = json_encode($_REQUEST);
        $f = fopen("log.txt", "w+");
        fwrite($f, $var1);
        
        fclose($f);
        echo "Stop!";
      
    }

    public function testAction()
    {
      $this->model->getUserFromDb('userTest1');
      $this->model->getUser();
    }
}