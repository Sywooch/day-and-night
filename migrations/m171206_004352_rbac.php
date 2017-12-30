<?php

use yii\db\Migration;

/**
 * Class m171206_004352_rbac
 */
class m171206_004352_rbac extends Migration
{
    /**
     * @inheritdoc
     */

    public function safeUp()
    {
        //RBAC https://yii2-cookbook.readthedocs.io/security-rbac/
        //yii migrate --migrationPath=@yii/rbac/migrations
        //shell_exec('php56 yii migrate --migrationPath=@yii/rbac/migrations/');
        return true;
    }


    /**
     * @inheritdoc
     */

    public function safeDown()
    {
        echo "m171206_004352_rbac cannot be reverted.\n";

        return true;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171206_004352_rbac cannot be reverted.\n";

        return false;
    }
    */
}
