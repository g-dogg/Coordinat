<?php

class cabinetController extends Controller
{
    protected $config;


    public function indexAction()
    {
        $this->view->render('cabinet');
    }

    public function addProblemAction()
    {
       $this->view->render('addProblem');
    }

    public function sendProblem()
    {
            $ticket = new ticketModel;
            $ticket->setNewProblem();

    }

    public function passwordAction()
    {
        $this->view->render('password');
    }

    public function changePwdAction()
    {
        $this->model->changePassword()->validatePwd();

    }

    public function editAddressAction()
    {
        $this->view->render('editAddress');
    }

    public function editPersonalAction()
    {
        $this->view->render('editPersonal');
    }

    public function saveAddressAction()
    {
        if(!exist($_POST['saveAddress']))
        {
            throw new Exception;
        }
        else
        {
            $this->model->setAddressArray();
        }
    }
}