<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Item command class
 *
 * Change a pet colour if possible
 *
 * @package    MG/Item
 * @category   Commands  
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming Team
 * @license    BSD http://modulargaming.com/license
 */
class MG_Item_Command_Pet_Paint extends Item_Command_Pet {

	protected function _build($name)
	{
		return array(
			'title' => 'Pet color',
			'search' => 'pet-color',
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
		$color = ORM::factory('Pet_Colour')
			->where('pet_colour.name', '=', $param)
			->find();
		return $color->loaded();
	}

	public function perform($item, $param, $pet = NULL)
	{
		$colour = ORM::factory('Pet_Colour')
		->where('pet_colour.name', '=', $param)
		->find();

		if ($pet->specie->has('colours', $colour))
		{
			$pet->colour_id = $colour->id;
			$pet->save();
			return $pet->name.' changed into '.$colour->name;
		}
		else
			return FALSE;
	}
}
