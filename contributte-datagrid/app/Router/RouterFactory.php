<?php

declare(strict_types=1);

namespace App\Router;

use Nette\Application\IRouter;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

class RouterFactory
{

	public static function create(): IRouter
	{
		$router = new RouteList;

		$router[] = new Route('<presenter>[/<id>]', 'Basic:default');

		return $router;
	}
}
