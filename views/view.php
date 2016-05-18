<?php
//namespace view;

class View
{

	public function render($page, $data = null)
	{
		include 'mainHeader.php';
		include $page . '.php';
		include 'mainFooter.php';
	}
}