<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * View for Item Shop Create
 *
 * @package    MG/Item
 * @category   View
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_View_Item_Shop_Create extends Abstract_View_Inventory {

	public $title = 'Shop';

	/**
	 * Contains 2 keys:
	 * - cost (integer)
	 * - affordable (bool) whether the user can afford it to create a shop
	 * @var array
	 */
	public $creation = FALSE;

	protected function get_breadcrumb()
	{
		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => 'Shop',
				'href'  => Route::url('item.user_shop.index')
			),
			array(
				'title' => 'Create',
				'href'  => Route::url('item.user_shop.create')
			)
		));
	}

}
