<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $rols
 * @property string $image
 * @property string $position
 * @property integer $status
 * @property integer $public
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password_hash', 'auth_key', 'email'], 'string'],
            [['rols', 'status', 'public'], 'integer'],
            [['username'], 'string', 'max' => 255],
            [['position'], 'string', 'max' => 100],
            [['email'],'email'],
            [['image'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'rols' => 'Rols',
            'image' => 'Image',
            'position' => 'Position',
            'status' => 'Status',
            'public' => 'Public',
        ];
    }
}
