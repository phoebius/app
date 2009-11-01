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

define('APP_ROOT', join(
		DIRECTORY_SEPARATOR,
		array_slice(
			explode(DIRECTORY_SEPARATOR, dirname(__FILE__)), 0, -1
		)
	)
);

require ( APP_ROOT . '/phoebius/etc/app.init.php' );
require ( APP_ROOT . '/etc/config.php' );

//////////////////////////////////////////////////////////////////////////////////////////////////

try
{
	require
		APP_ROOT . DIRECTORY_SEPARATOR .
		'cfg' . DIRECTORY_SEPARATOR .
		APP_SLOT . DIRECTORY_SEPARATOR .
		'config.php';

	//
	// your stuff goes here
	//
}

catch (Exception $e)
{
	if (APP_SLOT_CONFIGURATION & SLOT_CONFIGURATION_FLAG_DEVELOPMENT) {
		echo '<pre>', $e->getTraceAsString();
		throw $e;
	}
	else if (defined('BUGS_EMAIL')) {
		mail(
			BUGS_EMAIL,
			"[Phoebius crash] {$_SERVER['HTTP_HOST']} crash #" . substr(sha1($e->getMessage()), 0, 6),
			join(
				"\n\n",
				array(
					$_SERVER['REQUEST_URI'],
					'Request method: ' . $_SERVER['REQUEST_METHOD'],
					get_class($e). ' msg: ' . $e->getMessage(),
					print_r((array)$e, true),
					$e->getTraceAsString()
				)
			)
		);

//		$chainedRouteContext->handle(
//			$routingPolicy->getRule('404')->rewrite($webContext->getRequest(), new Route()),
//			$webContext
//		);
	}
}

?>