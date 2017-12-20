<?php

use yii\db\Migration;

/**
 * Class m171128_151850_create_table_users
 */
class m171128_151850_create_table_users extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `users` (
          `id` int(10) unsigned NOT NULL,
          `id_group` int(10) unsigned NOT NULL,
          `name` varchar(20) NOT NULL COMMENT 'имя',
          `login` varchar(20) NOT NULL,
          `pass` varchar(20) NOT NULL,
          `email` varchar(100) DEFAULT NULL,
          `skype` varchar(30) DEFAULT NULL,
          `wmr` varchar(14) DEFAULT NULL COMMENT 'кошелек'
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_151850_create_table_users cannot be reverted.\n";

        return false;
    }
    */
}
