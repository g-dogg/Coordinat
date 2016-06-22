<?php

class Router
{
	private $requestUrl;

	/**
	 * [start description]
	 * @return [type] [description]
	 */
	static function start()
	{
		$controllerName  = 'index';
		$actionName = 'index';
		$conf = new Config;
		$componentsArray = explode("/", $_SERVER['REQUEST_URI']);
		$db = new Db($conf);


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
            $model = new $modelName($db);
		$controller = new $controllerName($view, $model);
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

	/**
	 * [ErrorPage404 description]
	 */
	static function ErrorPage404()
	{
      	$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
      	header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
	}

}