<?php

use yii\db\Migration;

/**
 * Class m171128_151446_create_table_topics
 */
class m171128_151446_create_table_topics extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `topics` (
          `id` int(10) unsigned NOT NULL COMMENT 'id темы',
          `name_topic` varchar(40) NOT NULL COMMENT 'название темы',
          `status` int(10) unsigned NULL DEFAULT NULL COMMENT 'активность'
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('topics');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_151446_create_table_topics cannot be reverted.\n";

        return false;
    }
    */
}
