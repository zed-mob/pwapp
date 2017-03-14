<?php

namespace common\models\forum;

use Yii;

/**
 * This is the model class for table "forum_comment".
 *
 * @property integer $id
 * @property integer $topic_id
 * @property integer $creator_id
 * @property string $content
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Profile $creator
 * @property ForumTopic $topic
 * @property ForumSubcomment[] $forumSubcomments
 */
class ForumComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'creator_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['creator_id', 'created_at', 'updated_at'], 'required'],
            [['content'], 'string'],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['creator_id' => 'user_id']],
            [['topic_id'], 'exist', 'skipOnError' => true, 'targetClass' => ForumTopic::className(), 'targetAttribute' => ['topic_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic_id' => 'Topic ID',
            'creator_id' => 'Creator ID',
            'content' => 'Content',
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
     * @return \yii\db\ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasOne(ForumTopic::className(), ['id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForumSubcomments()
    {
        return $this->hasMany(ForumSubcomment::className(), ['comment_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ForumCommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ForumCommentQuery(get_called_class());
    }
}
