<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @return Nette\Application\IRouter
	 */
        public static function createRouter() {

        $router = new RouteList();
        $router[] = $aRouter = new RouteList('Admin');
        $aRouter[] = new Route('admin/<presenter>/<action>[/<id>]', 'Homepage:default');

        $router[] = $fRouter = new RouteList('Front');
        $fRouter[] = new Route('<slug [0-9a-zA-Z\-]+>', [
            "presenter" => "Pages",
            "action" => "navigation",
            "slug" => [
                Route::FILTER_IN => function($slug) {
                    return \Nette\Utils\Strings::webalize($slug);
                },
                Route::FILTER_OUT => function($slug) {
                    return \Nette\Utils\Strings::webalize($slug);
                }
            ]
        ]);
		$fRouter[] = new Route('stranka/<slug [0-9a-zA-Z\-]+>', [
            "presenter" => "Pages",
            "action" => "page",
            "slug" => [
                Route::FILTER_IN => function($slug) {
                    return \Nette\Utils\Strings::webalize($slug);
                },
                Route::FILTER_OUT => function($slug) {
                    return \Nette\Utils\Strings::webalize($slug);
                }
            ]
        ]);

        $fRouter[] = new Route('<presenter>/<action>[/<id [0-9]+>]', 'Homepage:default');

        return $router;
    }

}
