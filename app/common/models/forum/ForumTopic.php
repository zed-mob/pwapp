<?php

namespace common\models\forum;

use Yii;
use common\models\user\Profile;

/**
 * This is the model class for table "forum_topic".
 *
 * @property integer $id
 * @property integer $group_id
 * @property integer $creator_id
 * @property string $topic
 * @property string $description
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ForumComment[] $forumComments
 * @property Profile $creator
 * @property ForumGroup $group
 */
class ForumTopic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'creator_id', 'created_at', 'updated_at'], 'required'],
            [['group_id', 'creator_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['topic', 'description'], 'string'],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['creator_id' => 'user_id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ForumGroup::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'creator_id' => 'Creator ID',
            'topic' => 'Topic',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForumComments()
    {
        return $this->hasMany(ForumComment::className(), ['topic_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreator()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'creator_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(ForumGroup::className(), ['id' => 'group_id']);
    }

    /**
     * @inheritdoc
     * @return ForumTopicQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new ForumTopicQuery(get_called_class());
    // }
}
