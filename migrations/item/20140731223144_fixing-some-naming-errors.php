<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Fixing some naming errors
 */
class Migration_Item_20140731223144 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "UPDATE `mg`.`items` SET `name` = 'Block' WHERE `items`.`id` =21");
		$db->query(NULL, "UPDATE `mg`.`items` SET `name` = 'Deck of Card' WHERE `items`.`id` =23");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, "UPDATE `mg`.`items` SET `name` = 'Blocks' WHERE `items`.`id` =21");
		$db->query(NULL, "UPDATE `mg`.`items` SET `name` = 'Cards' WHERE `items`.`id` =23");
	}

}
