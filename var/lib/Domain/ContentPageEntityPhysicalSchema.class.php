<?php
/* ***********************************************************************************************
 *
 * Phoebius Framework v.1.0.0
 *
 * **********************************************************************************************
 *
 * This is an auxiliary autogenerated file. Do not edit it as it can be regenerated implicitly!
 *
 ************************************************************************************************/

/**
 * Autogenerated class
 */
final class ContentPageEntityPhysicalSchema implements IPhysicallySchematic
{
	/**
	 * @see IPhysicallySchematic::getTable()
	 * @return string
	 */
	function getTable()
	{
		return 'content_page';
	}

	function getFields()
	{
		return array('id', 'title', 'text');
	}
}

?>