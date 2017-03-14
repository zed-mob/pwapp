<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $tagline
 * @property string $logo
 * @property integer $status
 *
 * @property Profile[] $profiles
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'tagline', 'logo'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'tagline' => 'Tagline',
            'logo' => 'Logo',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfiles()
    {
        return $this->hasMany(Profile::className(), ['course_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CourseQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new CourseQuery(get_called_class());
    // }
}
