<?php

use yii\db\Migration;

/**
 * Class m171128_161551_news_change_column
 */
class m171128_161551_news_change_column extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->alterColumn('news', 'date_publication', "TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() COMMENT 'время публикации'");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_161551_news_change_column cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_161551_news_change_column cannot be reverted.\n";

        return false;
    }
    */
}
