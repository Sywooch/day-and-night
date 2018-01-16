<?php

use yii\db\Migration;

/**
 * Class m180103_194336_create_table_query_work
 */
class m180103_194336_create_table_query_work extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `query_work` (
          `id` int(10) unsigned NOT NULL,
          `id_author` int(10) unsigned DEFAULT NULL COMMENT 'Исполнитель',
          `text` text NOT NULL COMMENT 'Описание',
          `start_time` DATETIME DEFAULT NULL COMMENT 'Время начала работы',
          `end_time` DATETIME DEFAULT NULL COMMENT 'Время сдачи работы',
          `status` int(2) unsigned NOT NULL DEFAULT '1' COMMENT 'Статус',
          `date_query` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата создание'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT 'Запрос';");

        $this->addPrimaryKey('', 'query_work', 'id');
        $this->createIndex('id_author', 'query_work', 'id_author');

        $this->alterColumn('query_work', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');

        $this->addForeignKey('query_work_ibfk_1', 'query_work', 'id_author', 'user', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('query_work');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180103_194336_create_table_query_work cannot be reverted.\n";

        return false;
    }
    */
}
