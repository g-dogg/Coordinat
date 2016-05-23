<?php

class Router
{
	private $requestUrl;

	static function start()
	{
		$controllerName  = 'index';
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

		$modelFile = $modelName . ".php";
		$modelPath = "models/" . $modelFile;
		if(file_exists($modelPath))
		{
			include "models/" . $modelFile;
		}


		$controllerFile = $controllerName . ".php";
		$controllerPath = "controllers/" . $controllerFile;
		if(file_exists($controllerPath))
		{
			try
			{
				include $controllerPath;
			}
			catch (Exception $e)
			{
				echo $e;
			}

		}
		else
		{
			Router::ErrorPage404();
		}
		$view = new View;
		$controller = new $controllerName($view);
		$action = $actionName;
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{

			Router::ErrorPage404();
		}
		/**/
	}


	static function ErrorPage404()
	{
      	$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
      	header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
	}

}