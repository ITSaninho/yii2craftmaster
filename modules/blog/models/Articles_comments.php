<?php

namespace app\modules\blog\models;

use Yii;

/**
 * This is the model class for table "articles_comments".
 *
 * @property integer $id
 * @property string $articles_id
 * @property string $text
 * @property integer $data
 * @property integer $public
 */
class Articles_comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles_comments';
    }

    public function getArticles(){
        return $this->hasOne(Articles::className(), ['id' => 'articles_id']);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data', 'public'], 'integer'],
            [['articles_id', 'text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articles_id' => 'Articles ID',
            'text' => 'Text',
            'data' => 'Data',
            'public' => 'Public',
        ];
    }
}
