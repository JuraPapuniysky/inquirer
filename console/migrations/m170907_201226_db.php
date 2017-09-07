<?php

use yii\db\Migration;

class m170907_201226_db extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%question}}', [
            'id' => $this->primaryKey(),
            'question' => $this->char(255),
            'status' => $this->boolean(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%form}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'user_ip' => $this->char(30),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createTable('{{%answer}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'form_id' => $this->integer(),
            'question_id' => $this->integer(),
            'description' => $this->char(255),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex('FK_user_form', '{{%form}}', 'user_id');
        $this->addForeignKey('FK_user_form', '{{%form}}', 'user_id', '{{%user}}', 'id');

        $this->createIndex('FK_user_answer', '{{%answer}}', 'user_id');
        $this->addForeignKey('FK_user_answer', '{{%answer}}', 'user_id', '{{%user}}', 'id');

        $this->createIndex('FK_form_answer', '{{%answer}}', 'form_id');
        $this->addForeignKey('FK_form_answer', '{{%answer}}', 'form_id', '{{%form}}', 'id');

        $this->createIndex('FK_question_answer', '{{%answer}}', 'question_id');
        $this->addForeignKey('FK_question_answer', '{{%answer}}', 'question_id', '{{%question}}', 'id');

    }

    public function safeDown()
    {
        echo "m170907_201226_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170907_201226_db cannot be reverted.\n";

        return false;
    }
    */
}
