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

        $var1 = json_encode($_REQUEST);
        $f = fopen("log.txt", "w+");
        fwrite($f, $var1);

        fclose($f);
        $data['success'] = true;
        echo json_encode($data);

    }

    public function testAction()
    {
      $this->model->getUserFromDb('userTest1');
      $this->model->getUser();
    }
}