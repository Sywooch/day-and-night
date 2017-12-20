<?php

use yii\db\Migration;

/**
 * Class m171128_151625_create_table_topics_use
 */
class m171128_151625_create_table_topics_use extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `topics_use` (
          `id` int(10) unsigned NOT NULL COMMENT 'T1',
          `id_user` int(10) unsigned NOT NULL,
          `id_topic` int(10) unsigned NOT NULL
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='texture';");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('topics_use');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_151625_create_table_topics_use cannot be reverted.\n";

        return false;
    }
    */
}
