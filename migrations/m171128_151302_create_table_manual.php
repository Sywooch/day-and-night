<?php

use yii\db\Migration;

/**
 * Class m171128_151302_create_table_manual
 */
class m171128_151302_create_table_manual extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `manual` (
          `id` int(10) unsigned NOT NULL,
          `name` varchar(40) DEFAULT NULL,
          `text` text NOT NULL,
          `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('manual');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_151302_create_table_manual cannot be reverted.\n";

        return false;
    }
    */
}
