<?php

use yii\db\Migration;

/**
 * Class m171128_153459_topics_use_add_index
 */
class m171128_153459_topics_use_add_index extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addPrimaryKey('', 'topics_use', 'id');
        $this->createIndex('id_user', 'topics_use', 'id_user');
        $this->createIndex('id_topic', 'topics_use', 'id_topic');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_153459_topics_use_add_index cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_153459_topics_use_add_index cannot be reverted.\n";

        return false;
    }
    */
}
