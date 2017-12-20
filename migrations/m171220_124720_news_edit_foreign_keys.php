<?php

use yii\db\Migration;

/**
 * Class m171220_124720_news_edit_foreign_keys
 */
class m171220_124720_news_edit_foreign_keys extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->dropForeignKey('news_ibfk_1', 'news');
        $this->addForeignKey('news_ibfk_1', 'news', 'id_author', 'user', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171220_124720_news_edit_foreign_keys cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171220_124720_news_edit_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
