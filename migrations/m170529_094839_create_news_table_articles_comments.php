<?php

use yii\db\Migration;

class m170529_094839_create_news_table_articles_comments extends Migration
{
    public function safeUp()
    {
        $this->createTable('articles_comments', [
            'id' => $this->primaryKey(),
            'articles_id' => $this->string(100),
            'text' => $this->string(100),
            'data' => $this->integer(11),
            'public' => $this->integer(1),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('articles_comments');
    }
}
