<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Abstract base view for Inventory.
 *
 * @package    MG/Item
 * @category   View
 * @author     Modular Gaming
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Abstract_View_Inventory extends Abstract_View {

	protected function get_breadcrumb()
	{
		return array_merge(parent::get_breadcrumb(), array(
			array(
				'title' => 'Inventory',
				'href'  => Route::url('item.inventory')
			)
		));
	}

} // End Abstract_View_Inventory
