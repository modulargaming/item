<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Move the recipe to the cookbook
 *
 * @package    MG/Item
 * @category   Commands
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming Team
 * @license    BSD http://modulargaming.com/license
 */
class MG_Item_Command_General_Cook extends Item_Command {

	public $allow_more = FALSE;
	public $delete_after_consume = FALSE;

	protected function _build($name)
	{
		return array(
			'title' => 'Recipe',
			'search' => 'recipe',
			'fields' => array(
				array(
					'input' => array(
						'name' => $name, 'class' => 'input-small search'
					)
				)
			)
		);
	}

	public function validate($param)
	{
		$recipe = ORM::factory('Item_Recipe')
			->where('item_recipe.name', '=', $param)
			->find();

		return $recipe->loaded();
	}

	public function perform($item, $param, $data = NULL)
	{
		$item->move('cookbook');

		return $item->item->name.' has been moved to your cookbook.';
	}
}
