<?php

use yii\db\Migration;

/**
 * Class m171224_221702_create_table_mission
 */
class m171224_221702_create_table_mission extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `mission` (
          `id` int(10) unsigned NOT NULL,
          `id_topic` int(10) unsigned NOT NULL COMMENT 'Тема',
          `id_author` int(10) unsigned NOT NULL COMMENT 'Составитель',
          `article_name` varchar(40) DEFAULT NULL COMMENT 'Название статьи',
          `uniqueness` varchar(40) DEFAULT NULL COMMENT 'Уникальность',
          `develop_theme` text NOT NULL COMMENT 'Раскрыть тему',
          `empty_words` text NOT NULL COMMENT 'Запрещены фразы',
          `keywords` text NOT NULL COMMENT 'Ключевые слова',
          `comment_view` datetime NOT NULL COMMENT 'Дополнительное описание',
          `status` int(2) unsigned NOT NULL DEFAULT '3' COMMENT 'Статус',
          `date_creature` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата создание'
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT 'Задания';");

        $this->addPrimaryKey('', 'mission', 'id');
        $this->createIndex('id_topic', 'mission', 'id_topic');
        $this->createIndex('id_author', 'mission', 'id_author');

        $this->alterColumn('mission', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');

        $this->addForeignKey('mission_ibfk_1', 'mission', 'id_topic', 'topics', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('mission_ibfk_2', 'mission', 'id_author', 'user', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171224_221702_create_table_mission cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171224_221702_create_table_mission cannot be reverted.\n";

        return false;
    }
    */
}
