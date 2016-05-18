<?php

class cabinetController extends Controller
{
	public function indexAction()
	{
		$this->views->render('cabinetIndex');
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