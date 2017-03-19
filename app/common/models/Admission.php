<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admission".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class Admission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admission';
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
     * @return AdmissionQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new AdmissionQuery(get_called_class());
    // }
}
