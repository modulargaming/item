<?php
/**
 * Item command class
 *
 * Abstract Move
 *
 * @package    MG/Item
 * @category   Commands  
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */

class MG_Item_Command_Move extends Item_Command {

	public $default = TRUE;
	public $delete_after_consume = FALSE;

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

	public function inventory()
	{
		return array('field' => array(
			'name' => 'amount',
			'type' => 'number',
			'classes' => 'input-mini',
			'button' => 'Move'
		));
	}
}
