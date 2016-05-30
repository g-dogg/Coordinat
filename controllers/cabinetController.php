<?php

class cabinetController extends Controller
{
        protected $config;
/*
        function __construct()
        {
            parent::__construct();
            //$this->config = $config;

        }
*/

       public function indexAction()
	{
		$this->view->render('cabinet');
	}

	public function addProblemAction()
	{
		$this->view->render('addProblem');
	}

	public function changePasswordAction()
	{
		$this->view->render('changePassword');
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