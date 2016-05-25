<?php
ini_set('display_errors', 1);

if(file_exists('bootstrap.php'))
{
	try
	{
		include_once 'bootstrap.php';
	}
	catch (Exception $e)
	{
		echo $e;
	}
}