<?php

use yii\db\Migration;

/**
 * Class m171128_153415_news_add_index
 */
class m171128_153415_news_add_index extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addPrimaryKey('', 'news', 'id');
        $this->createIndex('id_author', 'news', 'id_author');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_153415_news_add_index cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_153415_news_add_index cannot be reverted.\n";

        return false;
    }
    */
}
