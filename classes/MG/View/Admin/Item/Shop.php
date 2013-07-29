<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * View for Admin Item Shop
 *
 * @package    MG/Item
 * @category   View
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming Team
 * @license    BSD http://modulargaming.com/license
 */
class MG_View_Admin_Item_Shop extends Abstract_View_Admin {

	public $title = 'Shop';

	/**
	 * Command definition for javascript interface, so it knows how to deal with the commands
	 * @var array
	 */
	public $image = array('width' => 0, 'height' => 0);
}
