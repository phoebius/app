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
 * Represents an abstract database constraint.
 *
 * Constraint can be optinally named.
 *
 * @ingroup Dal_DB_Schema
 */
abstract class DBConstraint implements ISqlCastable
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * Gets the fields that should be indexed
	 *
	 * @return array of DBColumn
	 */
	abstract function getIndexableFields();

	/**
	 * Gets the name of the constraint
	 *
	 * @return string
	 */
	function getName()
	{
		return $this->name;
	}

	/**
	 * Sets the new name of the constraint
	 *
	 * @param string $name name of the constraint
	 *
	 * @return DBColumn itself
	 */
	function setName($name)
	{
		Assert::isScalar($name);

		$this->name = $name;

		return $this;
	}

	/**
	 * Gets the SQL representation of the constraint's head
	 *
	 * @param IDialect $dialect
	 *
	 * @return string
	 */
	protected function getHead(IDialect $dialect)
	{
		return 'CONSTRAINT ' . $dialect->quoteIdentifier($this->name);
	}
}

?>