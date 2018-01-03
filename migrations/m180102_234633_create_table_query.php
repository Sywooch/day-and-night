<?php

use yii\db\Migration;

/**
 * Class m180102_234633_create_table_query
 */
class m180102_234633_create_table_query extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `query` (
          `id` int(10) unsigned NOT NULL,
          `id_author` int(10) unsigned DEFAULT NULL COMMENT 'Составитель',
          `work_date` DATE DEFAULT NULL COMMENT 'Выберите дату',
          `start_time` TIME DEFAULT NULL COMMENT 'Время начала работы',
          `en_time` TIME DEFAULT NULL COMMENT 'Время сдачи работы',
          `count_symbols` int(10) DEFAULT NULL COMMENT 'Количество символов',
          `status` int(2) unsigned NOT NULL DEFAULT '3' COMMENT 'Статус',
          `date_query` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата создание'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT 'Запрос';");

        $this->addPrimaryKey('', 'query', 'id');
        $this->createIndex('id_author', 'query', 'id_author');

        $this->alterColumn('query', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');

        $this->addForeignKey('query_ibfk_1', 'query', 'id_author', 'user', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('query');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180102_234633_create_table_query cannot be reverted.\n";

        return false;
    }
    */
}
