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

// "title" and "contents" are expected parameters and MUST be presented in a model
// "isError" is optional parameter thus accessed using the "@" operator

?>

<?php if (@$this->isError) { ?>
	<h1><font color="red"><?=$this->title?></font></h1>
<?php } else { ?>
	<h1><?=$this->title?></h1>
<?php } ?>

<?=$this->contents?>