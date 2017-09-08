<?php

use yii\db\Migration;

class m170908_101213_add_user_role extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'role', $this->smallInteger()->defaultValue(20));
    }

    public function safeDown()
    {
        echo "m170908_101213_add_user_role cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170908_101213_add_user_role cannot be reverted.\n";

        return false;
    }
    */
}
