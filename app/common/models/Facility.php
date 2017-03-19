<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "facility".
 *
 * @property integer $id
 * @property string $category
 * @property string $name
 */
class Facility extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facility';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'name' => 'Name',
        ];
    }

    /**
     * @inheritdoc
     * @return FacilityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FacilityQuery(get_called_class());
    }
}
