<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "offered_course".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class OfferedCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offered_course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
        ];
    }

    /**
     * @inheritdoc
     * @return OfferedCourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OfferedCourseQuery(get_called_class());
    }
}
