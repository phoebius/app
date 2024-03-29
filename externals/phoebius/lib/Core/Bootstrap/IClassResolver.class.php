<?php
/* ***********************************************************************************************
 *
 * Phoebius Framework
 *
 * **********************************************************************************************
 *
 * Copyright (c) 2009 Scand Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms
 * of the GNU Lesser General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU Lesser General Public License along with
 * this program; if not, see <http://www.gnu.org/licenses/>.
 *
 ************************************************************************************************/

/**
 * @ingroup Core_Bootstrap
 */
interface IClassResolver
{
	/**
	 * Gets the path to a file containing the specified class
	 *
	 * @param string name of the class
	 * @param boolean whether to use internal cache or not
	 *
	 * @return string|null path to file or null if file not found
	 */
	function getClassPath($classname, $hitCacheOnly = false);

	/**
	 * Loads the file containing the specified class
	 *
	 * @param string name of the class
	 * @param boolean whether to use internal cache or not
	 *
	 * @return boolean whether the file was loaded or not
	 */
	function loadClassFile($classname, $hitCacheOnly = false);
}

?>