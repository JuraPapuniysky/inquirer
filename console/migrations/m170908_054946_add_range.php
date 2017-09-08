<?php

use yii\db\Migration;

class m170908_054946_add_range extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%answer}}', 'range', $this->smallInteger(2));
    }

    public function safeDown()
    {
        echo "m170908_054946_add_range cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170908_054946_add_range cannot be reverted.\n";

        return false;
    }
    */
}
