<?php

use yii\db\Migration;

/**
 * Class m171205_221237_articles_add_foreign_keys
 */
class m171205_221237_articles_add_foreign_keys extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addForeignKey('articles_ibfk_1', 'articles', 'id_parent', 'articles', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('articles_ibfk_2', 'articles', 'id_author', 'users', 'id', 'NO ACTION', 'NO ACTION');

        $this->execute('ALTER TABLE `articles` CHANGE `name_topic` `id_topic` INT(10) UNSIGNED  NULL DEFAULT NULL;');
        $this->createIndex('id_topic', 'articles', 'id_topic');
        $this->addForeignKey('articles_ibfk_32', 'articles', 'id_topic', 'topics', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171205_221237_articles_add_foreign_keys cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171205_221237_articles_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
