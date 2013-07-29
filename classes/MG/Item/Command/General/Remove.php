<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Delete an item from inventory
 *
 * @package    MG/Item
 * @category   Commands
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */
class MG_Item_Command_General_Remove extends Item_Command {

	public $default = TRUE;

	protected function _build($name)
	{
		return NULL;
	}

	public function validate($param)
	{
		return NULL;
	}

	public function perform($item, $amount, $data = NULL)
	{
		return NULL;
	}
}
