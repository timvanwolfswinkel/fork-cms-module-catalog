<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This is the configuration-object for the Catalog module
 *
 * @author Tim van Wolfswinkel <tim@webleads.nl>
 */
final class FrontendCatalogConfig extends FrontendBaseConfig
{
	/**
	 * The default action
	 *
	 * @var string
	 */
	protected $defaultAction = 'index';

	/**
	 * The disabled actions
	 *
	 * @var array
	 */
	protected $disabledActions = array();
}
