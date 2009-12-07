<?php
/* ***********************************************************************************************
 *
 * Phoebius Framework
 *
 * **********************************************************************************************
 *
 * Copyright (c) 2009 phoebius.org
 *
 * This program is free software; you can redistribute it and/or modify it under the terms
 * of the GNU Lesser General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU Lesser General Public License along with
 * this program; if not, see <http://www.gnu.org/licenses/>.
 *
 ************************************************************************************************/

class ApplicationRouter extends ChainedRouter
{
	function __construct()
	{
		parent::__construct(new MvcDispatcher());

		$this->fillRoutes();
	}

	protected function fillRoutes()
	{
		// define route for the custom page
//		$this->route(
//			'customPage',
//			'/:controller/:action/',
//			array()
//		);

		// define route for the front page
		$this->route(
			'index',
			'/',
			array('controller' => 'CustomPage', 'action' => 'index')
		);

		// set handler for unrouted requests (a fallback route)
		$fallbackRoute = new Route(
			$this->getDefaultDispatcher(),
			ParameterImportRule::multiple(array(
				'controller' => 'CustomPage',
				'action' => '404'
			))
		);

		$this->setFallbackRoute($fallbackRoute);
	}
}

?>