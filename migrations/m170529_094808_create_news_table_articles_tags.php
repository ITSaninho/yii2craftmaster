<?php

use yii\db\Migration;

class m170529_094808_create_news_table_articles_tags extends Migration
{
    public function safeUp()
    {
        $this->createTable('articles_tags', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11),
            'name' => $this->string(100),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('articles_tags');
    }
}
