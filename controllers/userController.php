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

    public function registerUserAction()
    {
    //TODO тут пое*** из модели
      //$validatedData = new validateFormPassword;
      if(isset($_POST))
      {
        var_dump($_POST);
      }
    }

    public function testAction()
    {
      $this->model->getUserFromDb('userTest1');
      $this->model->getUser();
    }
}