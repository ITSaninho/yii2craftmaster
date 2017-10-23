<?php

use yii\db\Migration;

class m170529_094742_create_news_table_team extends Migration
{
    public function safeUp()
    {
        $this->createTable('team', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password_hash' => $this->text(),
            'auth_key' => $this->text(),
            'rols' => $this->integer(2),
            'image' => $this->string(255),
            'position' => $this->string(100),
            'status' => $this->integer(2),
            'public' => $this->integer(1),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('team');
    }
}
