<?php

use yii\db\Migration;

class m170529_094607_create_news_table_portfolio_tags extends Migration
{
    public function safeUp()
    {
        $this->createTable('portfolio_tags', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(11),
            'name' => $this->string(100),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('portfolio_tags');
    }
}
