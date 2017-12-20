<?php

use yii\db\Migration;

/**
 * Class m171220_211920_create_table_user_profile
 */
class m171220_211920_create_table_user_profile extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `user_profile` (
          `id` int(10) unsigned NOT NULL,
          `id_user` int(10) unsigned NOT NULL,
          `skype` varchar(50) DEFAULT NULL,
          `wmr` varchar(40) DEFAULT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

        $this->addPrimaryKey('', 'user_profile', 'id');
        $this->createIndex('id_user', 'user_profile', 'id_user');

        $this->addForeignKey('user_profile_ibfk_1', 'user_profile', 'id_user', 'users', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('articles');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171220_211920_create_table_user_profile cannot be reverted.\n";

        return false;
    }
    */
}
