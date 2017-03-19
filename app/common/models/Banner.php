<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $name
 * @property string $image_path
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'required'],
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['image_path'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image_path' => 'Image Path',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return BannerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BannerQuery(get_called_class());
    }
}
