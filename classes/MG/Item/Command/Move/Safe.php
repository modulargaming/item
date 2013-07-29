<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Move an item to their safe
 *
 * @package    MG/Item
 * @category   Commands
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */

class MG_Item_Command_Move_Safe extends Item_Command_Move {

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
		$name = $item->item->name($amount);

		if ( ! $item->move('safe', $amount))
		{
			return FALSE;
		}

		return 'You have successfully moved '.$name.' to your safe.';
	}

}
