<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_newsfeeds
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JLoader::register('NewsfeedsHelper', JPATH_ADMINISTRATOR . '/components/com_newsfeeds/helpers/newsfeeds.php');
JLoader::register('CategoryHelperAssociation', JPATH_ADMINISTRATOR . '/components/com_categories/helpers/association.php');

/**
 * Newsfeeds Component Association Helper
 *
 * @package     Joomla.Site
 * @subpackage  com_contact
 * @since       3.0
 */
abstract class NewsfeedsHelperAssociation extends CategoryHelperAssociation
{
	/**
	 * Method to get the associations for a given item
	 *
	 * @param   integer  $id    Id of the item
	 * @param   string   $view  Name of the view
	 *
	 * @return  array   Array of associations for the item
	 *
	 * @since  3.0
	 */

	public static function getAssociations($id = 0, $view = null)
	{
		jimport('helper.route', JPATH_COMPONENT_SITE);

		$app = JFactory::getApplication();
		$jinput = $app->input;
		$view = is_null($view) ? $jinput->get('view') : $view;
		$id = empty($id) ? $jinput->getInt('id') : $id;

		if ($view == 'newsfeed')
		{
			if ($id)
			{
				$associations = NewsfeedsHelper::getAssociations($id);

				$return = array();

				foreach ($associations as $tag => $item)
				{
					$return[$tag] = NewsfeedsHelperRoute::getNewsfeedRoute($item->id, $item->catid, $item->language);
				}

				return $return;
			}
		}

		if ($view == 'category' || $view == 'categories')
		{
			return self::getCategoryAssociations($id, 'com_newsfeeds');
		}

		return array();

	}
}
