<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Item Model Trade Bid
 *
 * @package    MG/Item
 * @category   Model
 * @author     Maxim Kerstens
 * @copyright  (c) 2013 Modular Gaming
 * @license    BSD http://www.modulargaming.com/license
 */

class MG_Model_User_Trade_Bid extends ORM {


	protected $_table_columns = array(
		'id'           => NULL,
		'trade_id	' => NULL,
		'user_id'      => NULL,
		'points'       => NULL,
		'created'      => NULL
	);

	protected $_belongs_to = array(
		'user'  => array(
			'model'       => 'User',
			'foreign_key' => 'user_id'
		),
		'trade' => array(
			'model'       => 'User_Trade',
			'foreign_key' => 'trade_id'
		),
	);

	protected $_created_column = array(
		'column' => 'created',
		'format' => TRUE
	);

	protected $_load_with = array('user');

	public function rules()
	{
		return array(
			'points' => array(
				array('digit'),
			),
		);
	}

	public function items()
	{
		return Item::location('trade.bid', TRUE, $this->id, $this->user)
			->find_all();
	}

} // End User_Trade Model
