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
        $validator = new validateFormRegisterClass;
        $validatedData = $validator->validateUserForm()->getValidatedUserData();
        
        $user = new userModel;
        
        try
        {
            $user->newUser($validatedData['username']);
            $data = [
                    'success'  => 1,
                    'message'  => 'Добро пожаловать',
                    'username' => $validatedData['username'],
                    'email'    => $validatedData['email']
                ];
    
            
            
        }
        catch (Exception $ex) 
        {
            echo $ex; //TODO: наеписать класс логгирования и сюда ег овпендюривать
            $data = [
                    'success'  => 0,
                    'message'  => 'Добро пожаловать',
                    'username' => $validatedData['username'],
                    'email'    => $validatedData['email']
                ];
        }
        $json = new jsonModel(NULL, $data);
        echo $json->encodeUserJson();
      
        $var1 = json_encode($validatedData);
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