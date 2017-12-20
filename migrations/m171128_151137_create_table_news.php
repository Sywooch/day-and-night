<?php

use yii\db\Migration;

/**
 * Class m171128_151137_create_table_news
 */
class m171128_151137_create_table_news extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `news` (
          `id` int(10) unsigned NOT NULL,
          `id_author` int(10) unsigned NOT NULL,
          `name` varchar(40) DEFAULT NULL COMMENT 'заголовок',
          `text` text NOT NULL,
          `date_publication` datetime NOT NULL COMMENT 'время публикации'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_151137_create_table_news cannot be reverted.\n";

        return false;
    }
    */
}
