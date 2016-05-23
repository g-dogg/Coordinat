<?php

class cabinetController extends Controller
{
	public function indexAction()
	{
		$this->view->render('cabinetIndex');
		//echo "fuck yo bitchezz bitch " . __CLASS__;
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

	public function testAction()
	{
		echo __CLASS__;
	}
}