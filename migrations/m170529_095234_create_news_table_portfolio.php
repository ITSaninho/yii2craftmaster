<?php

use yii\db\Migration;

class m170529_095234_create_news_table_portfolio extends Migration
{
    public function safeUp()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'title_ukr' => $this->string(255),
            'title_eng' => $this->string(255),
            'title_rus' => $this->string(255),
            'project_description_ukr' => $this->text(),
            'project_description_eng' => $this->text(),
            'project_description_rus' => $this->text(),
            'client_description_ukr' => $this->text(),
            'client_description_eng' => $this->text(),
            'client_description_rus' => $this->text(),
            'done_description_ukr' => $this->text(),
            'done_description_eng' => $this->text(),
            'done_description_rus' => $this->text(),
            'site_url' => $this->text(),
            'main_tag' => $this->string(255),
            'other_tags' => $this->text(),
            'images' => $this->text(),
            'other_images' => $this->text(),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('portfolio');
    }
}
