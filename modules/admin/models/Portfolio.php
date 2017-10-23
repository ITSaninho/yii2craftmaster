<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property integer $id
 * @property string $title_ukr
 * @property string $title_eng
 * @property string $title_rus
 * @property string $project_description_ukr
 * @property string $project_description_eng
 * @property string $project_description_rus
 * @property string $client_description_ukr
 * @property string $client_description_eng
 * @property string $client_description_rus
 * @property string $done_description_ukr
 * @property string $done_description_eng
 * @property string $done_description_rus
 * @property string $site_url
 * @property string $main_tag
 * @property string $other_tags
 * @property string $images
 * @property string $other_images
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_description_ukr', 'project_description_eng', 'project_description_rus', 'client_description_ukr', 'client_description_eng', 'client_description_rus', 'done_description_ukr', 'done_description_eng', 'done_description_rus', 'site_url', 'other_tags', 'images', 'other_images'], 'string'],
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
            'project_description_ukr' => 'Project Description Ukr',
            'project_description_eng' => 'Project Description Eng',
            'project_description_rus' => 'Project Description Rus',
            'client_description_ukr' => 'Client Description Ukr',
            'client_description_eng' => 'Client Description Eng',
            'client_description_rus' => 'Client Description Rus',
            'done_description_ukr' => 'Done Description Ukr',
            'done_description_eng' => 'Done Description Eng',
            'done_description_rus' => 'Done Description Rus',
            'site_url' => 'Site Url',
            'main_tag' => 'Main Tag',
            'other_tags' => 'Other Tags',
            'images' => 'Images',
            'other_images' => 'Other Images',
        ];
    }
}
