<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $user_id
 * @property string $student_id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone_no
 * @property string $mobile_no
 * @property string $street
 * @property string $city
 * @property string $province
 * @property string $zip_code
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['student_id'], 'string', 'max' => 15],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['phone_no', 'mobile_no'], 'string', 'max' => 20],
            [['street', 'city', 'province'], 'string', 'max' => 30],
            [['zip_code'], 'string', 'max' => 10],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'student_id' => 'Student ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone_no' => 'Phone No',
            'mobile_no' => 'Mobile No',
            'street' => 'Street',
            'city' => 'City',
            'province' => 'Province',
            'zip_code' => 'Zip Code',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @inheritdoc
     * @return ProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProfileQuery(get_called_class());
    }
}
