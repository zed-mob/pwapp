<?php

namespace common\models\forum;

use Yii;

/**
 * This is the model class for table "forum_group".
 *
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $tagline
 * @property integer $status
 *
 * @property ForumTopic[] $forumTopics
 */
class ForumGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'status'], 'integer'],
            [['logo', 'tagline'], 'string'],
            [['name'], 'string', 'max' => 40],
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
            'logo' => 'Logo',
            'tagline' => 'Tagline',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForumTopics()
    {
        return $this->hasMany(ForumTopic::className(), ['group_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ForumGroupQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new ForumGroupQuery(get_called_class());
    // }
}
