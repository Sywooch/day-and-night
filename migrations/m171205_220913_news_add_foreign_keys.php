<?php

use yii\db\Migration;

/**
 * Class m171205_220913_news_add_foreign_keys
 */
class m171205_220913_news_add_foreign_keys extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addForeignKey('news_ibfk_1', 'news', 'id_author', 'users', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171205_220913_news_add_foreign_keys cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171205_220913_news_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
