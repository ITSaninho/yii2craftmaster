<?php

namespace app\modules\blog\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $title_ukr
 * @property string $title_eng
 * @property string $title_rus
 * @property string $description_ukr
 * @property string $description_eng
 * @property string $description_rus
 * @property string $text_ukr
 * @property string $text_eng
 * @property string $text_rus
 * @property string $site_url
 * @property string $main_tag
 * @property string $other_tags
 * @property string $images
 * @property string $preview_images
 * @property integer $views
 * @property integer $public
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    public function getArticles(){
        return $this->hasOne(Articles::className(), ['id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description_ukr', 'description_eng', 'description_rus', 'text_ukr', 'text_eng', 'text_rus', 'site_url', 'other_tags', 'images', 'preview_images'], 'string'],
            [['views', 'public'], 'integer'],
            [['title_ukr', 'title_eng', 'title_rus', 'main_tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_ukr' => 'Title Ukr',
            'title_eng' => 'Title Eng',
            'title_rus' => 'Title Rus',
            'description_ukr' => 'Description Ukr',
            'description_eng' => 'Description Eng',
            'description_rus' => 'Description Rus',
            'text_ukr' => 'Text Ukr',
            'text_eng' => 'Text Eng',
            'text_rus' => 'Text Rus',
            'site_url' => 'Site Url',
            'main_tag' => 'Main Tag',
            'other_tags' => 'Other Tags',
            'images' => 'Images',
            'preview_images' => 'Preview Images',
            'views' => 'Views',
            'public' => 'Public',
        ];
    }
}
