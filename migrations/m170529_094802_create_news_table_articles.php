<?php

use yii\db\Migration;

class m170529_094802_create_news_table_articles extends Migration
{
    public function safeUp()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title_ukr' => $this->string(255),
            'title_eng' => $this->string(255),
            'title_rus' => $this->string(255),
            'description_ukr' => $this->text(),
            'description_eng' => $this->text(),
            'description_rus' => $this->text(),
            'text_ukr' => $this->text(),
            'text_eng' => $this->text(),
            'text_rus' => $this->text(),
            'site_url' => $this->text(),
            'main_tag' => $this->string(255),
            'other_tags' => $this->text(),
            'images' => $this->text(),
            'preview_images' => $this->text(),
            'views' => $this->integer(11),
            'public' => $this->integer(1),
        ]);
    }
    public function safeDown()
    {
        $this->dropTable('articles');
    }
}
