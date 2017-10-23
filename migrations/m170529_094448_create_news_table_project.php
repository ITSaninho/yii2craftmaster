<?php

use yii\db\Migration;

class m170529_094448_create_news_table_project extends Migration
{
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'email' => $this->string(100),
            'phone' => $this->string(20),
            'company' => $this->string(100),
            'data' => $this->integer(11),
            'quastion' => $this->text(),
            'process' => $this->integer(1),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('project');
    }
}
