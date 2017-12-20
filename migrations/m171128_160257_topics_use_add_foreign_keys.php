<?php

use yii\db\Migration;

/**
 * Class m171128_160257_topics_use_add_foreign_keys
 */
class m171128_160257_topics_use_add_foreign_keys extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addForeignKey('topics_use_ibfk_1', 'topics_use', 'id_user', 'users', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('topics_use_ibfk_2', 'topics_use', 'id_topic', 'topics', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_160257_topics_use_add_foreign_keys cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_160257_topics_use_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
