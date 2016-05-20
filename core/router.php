<?php

class Router
{
	private $requestUrl;
	//private $componentsArray = [];


	static function start()
	{
		$controllerName  = 'main';
		$actionName = 'index';
		$componentsArray = explode("/", $_SERVER['REQUEST_URI']);

		if(!empty($componentsArray[1]))
		{
			$controllerName = $componentsArray[1];
		}


		if(!empty($componentsArray[2]))
		{
			$actionName = $componentsArray[2];
		}

		$modelName = $controllerName . "Model";
		$controllerName = $controllerName . "Controller";
		$actionName = $actionName . "Action";

		$modelFile = strtolower($modelName ) . ".php";
		$modelPath = "../models/" . $modelFile;
		if(file_exists($modelPath))
		{
			include "../models/" . $modelFile;
		}


		$controllerFile = strtolower($controllerName) . ".php";
		$controllerPath = "../controllers/" . $controllerFile;
		if(file_exists($controllerPath))
		{
			include "../controllers/" . $controllerFile;
		}
		else
		{

			Router::ErrorPage404();
		}

		$controller = new $controllerName;
		$action = $actionName;
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{

			Router::ErrorPage404();
		}

	}


		static function ErrorPage404()
		{
        		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        		header('HTTP/1.1 404 Not Found');
			header("Status: 404 Not Found");
			header('Location:'.$host.'404');
		}

}