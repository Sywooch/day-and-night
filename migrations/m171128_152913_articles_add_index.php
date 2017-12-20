<?php

use yii\db\Migration;

/**
 * Class m171128_152913_articles_add_index
 */
class m171128_152913_articles_add_index extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addPrimaryKey('', 'articles', 'id');
        $this->createIndex('id_parent', 'articles', 'id_parent');
        $this->createIndex('id_author', 'articles', 'id_author');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_152913_articles_add_index cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_152913_articles_add_index cannot be reverted.\n";

        return false;
    }
    */
}
