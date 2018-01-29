<?php

use yii\db\Migration;

/**
 * Class m180112_144635_create_table_mission_use
 */
class m180112_144635_create_table_mission_use extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `mission_use` (
          `id` int(10) unsigned NOT NULL,
          `id_query` int(10) unsigned NOT NULL COMMENT 'Запрос',
          `id_mission` int(10) unsigned NOT NULL COMMENT 'Задание',
          `id_article` int(10) unsigned DEFAULT NULL COMMENT 'Статья'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT 'Связь между запросом, заданием и статьей';");

        $this->addPrimaryKey('', 'mission_use', 'id');
        $this->createIndex('id_query', 'mission_use', 'id_query');
        $this->createIndex('id_mission', 'mission_use', 'id_mission');
        $this->createIndex('id_article', 'mission_use', 'id_article');

        $this->alterColumn('mission_use', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');

        $this->addForeignKey('mission_use_ibfk_1', 'mission_use', 'id_query', 'query', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('mission_use_ibfk_2', 'mission_use', 'id_mission', 'mission', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('mission_use_ibfk_3', 'mission_use', 'id_article', 'articles', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('mission_use');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180112_144635_create_table_mission_use cannot be reverted.\n";

        return false;
    }
    */
}
