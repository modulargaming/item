<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Adding auto increase to shop_restocks
 */
class Migration_Item_20140731224439 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE shop_restocks ADD PRIMARY KEY ( id )");
		$db->query(NULL, "ALTER TABLE shop_restocks CHANGE id id INT( 11 ) NOT NULL AUTO_INCREMENT");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE shop_restocks CHANGE id id INT( 11 ) NOT NULL");
		$db->query(NULL, "ALTER TABLE shop_restocks DROP PRIMARY KEY");
	}

}
