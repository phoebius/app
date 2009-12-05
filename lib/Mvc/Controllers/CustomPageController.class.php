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

class CustomPageController extends ActionBasedController
{
	function action_404()
	{
		$page = new ContentPage;
		$page->setTitle('An error occured');
		$page->setText('The requested page does not exist');

		return $this->view(
			'content',
			array(
				'page' => $page,
				'isError' => true
			)
		);
	}

	function action_index()
	{
		$page = new ContentPage;
		$page->setTitle('My Application');
		$page->setText('Introducing one more application at the top Phoebius Framework');

		return $this->view(
			'content',
			array(
				'page' => $page,
			)
		);
	}
}

?>