<?php

use yii\db\Migration;

class m170529_094848_create_news_table_users extends Migration
{
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password_hash' => $this->text(),
            'auth_key' => $this->text(),
            'rols' => $this->integer(2),
            'image' => $this->string(255),
            'status' => $this->integer(2),
            'public' => $this->integer(1),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('users');
    }
}
