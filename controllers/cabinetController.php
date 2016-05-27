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
}