<?php

use yii\db\Migration;

/**
 * Class m171128_160800_create_topics
 */
class m171128_160800_create_topics extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->execute("INSERT INTO `topics` (`id`, `name_topic`, `status`) VALUES
        (1, 'Реклама', 1),
        (2, 'Туризм', 1),
        (3, 'Медицина', 1),
        (4, 'Лекарства', 1),
        (5, 'Народные средства', 1),
        (6, 'Сад и огород', 1),
        (7, 'Домашнее хозяйство', 1),
        (8, 'Домашние животные', 1),
        (9, 'Дикая природа', 1),
        (10, 'Эзотерика', 1);");
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171128_160800_create_topics cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171128_160800_create_topics cannot be reverted.\n";

        return false;
    }
    */
}
