<?php

use yii\db\Migration;

/**
 * Class m171128_121925_create_table_articles
 */
class m171128_121925_create_table_articles extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `articles` (
          `id` int(10) unsigned NOT NULL,
          `id_parent` int(10) unsigned NOT NULL,
          `id_author` int(10) unsigned NOT NULL,
          `name_topic` varchar(40) DEFAULT NULL,
          `name_article` varchar(40) DEFAULT NULL,
          `text` text NOT NULL,
          `date_creature` datetime NOT NULL,
          `date_publication` datetime NOT NULL,
          `date_update` datetime NOT NULL,
          `status` int(2) unsigned NOT NULL DEFAULT '0'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
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
        echo "m171128_121925_create_table_articles cannot be reverted.\n";

        return false;
    }
    */
}
