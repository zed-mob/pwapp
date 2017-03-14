<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $creator_id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property integer $category
 * @property integer $status
 * @property string $created_at
 * @property integer $updated_at
 *
 * @property Profile $creator
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['creator_id', 'created_at', 'updated_at'], 'required'],
            [['creator_id', 'category', 'status', 'updated_at'], 'integer'],
            [['title', 'content'], 'string'],
            [['created_at'], 'safe'],
            [['image'], 'string', 'max' => 100],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['creator_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'creator_id' => 'Creator ID',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'category' => 'Category',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreator()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'creator_id']);
    }

    /**
     * @inheritdoc
     * @return PostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PostQuery(get_called_class());
    }
}
