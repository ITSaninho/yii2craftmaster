<?php

namespace app\modules\settings\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $rols
 * @property string $image
 * @property integer $status
 * @property integer $public
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['password_hash', 'auth_key'], 'string'],
            [['rols', 'status', 'public'], 'integer'],
            [['username', 'image'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'public' => 'Public',
        ];
    }
}
