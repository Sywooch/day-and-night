<?php

use yii\db\Migration;

/**
 * Class m171128_153447_topics_add_index
 */
class m171128_153447_topics_add_index extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addPrimaryKey('', 'topics', 'id');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_153447_topics_add_index cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_153447_topics_add_index cannot be reverted.\n";

        return false;
    }
    */
}
