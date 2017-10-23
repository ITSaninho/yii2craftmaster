<?php

use yii\db\Migration;

class m170529_095105_create_news_table_users_comments extends Migration
{
    public function safeUp()
    {
        $this->createTable('users_comments', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string(100),
            'text' => $this->string(100),
            'data' => $this->integer(11),
            'public' => $this->integer(1),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('users_comments');
    }
}
