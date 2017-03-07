<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $activkey
 * @property integer $create_at
 * @property integer $lastvisit_at
 * @property integer $superuser
 * @property integer $online
 * @property integer $status
 *
 * @property Profile $profile
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['create_at', 'lastvisit_at', 'superuser', 'online', 'status'], 'integer'],
            [['username'], 'string', 'max' => 20],
            [['email', 'password', 'activkey'], 'string', 'max' => 128],
            [['username'], 'unique'],
            [['email'], 'unique'],
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
            'email' => 'Email',
            'password' => 'Password',
            'activkey' => 'Activkey',
            'create_at' => 'Create At',
            'lastvisit_at' => 'Lastvisit At',
            'superuser' => 'Superuser',
            'online' => 'Online',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}
