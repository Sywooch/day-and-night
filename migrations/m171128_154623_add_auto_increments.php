<?php

use yii\db\Migration;

/**
 * Class m171128_154623_add_auto_increments
 */
class m171128_154623_add_auto_increments extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->alterColumn('articles', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');
        $this->alterColumn('news', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');
        $this->alterColumn('manual', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');
        $this->alterColumn('topics', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');
        $this->alterColumn('topics_use', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');
        $this->alterColumn('users', 'id', 'int(10) unsigned NOT NULL AUTO_INCREMENT');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_154623_add_auto_increments cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_154623_add_auto_increments cannot be reverted.\n";

        return false;
    }
    */
}
