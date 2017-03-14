<?php

namespace common\models\forum;

use Yii;
use common\models\user\Profile;

/**
 * This is the model class for table "forum_subcomment".
 *
 * @property integer $id
 * @property integer $comment_id
 * @property integer $creator_id
 * @property string $content
 * @property integer $status
 * @property integer $updated_at
 * @property integer $created_at
 *
 * @property Profile $creator
 * @property ForumComment $comment
 */
class ForumSubcomment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forum_subcomment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'creator_id', 'updated_at', 'created_at'], 'required'],
            [['comment_id', 'creator_id', 'status', 'updated_at', 'created_at'], 'integer'],
            [['content'], 'string'],
            [['creator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['creator_id' => 'user_id']],
            [['comment_id'], 'exist', 'skipOnError' => true, 'targetClass' => ForumComment::className(), 'targetAttribute' => ['comment_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment_id' => 'Comment ID',
            'creator_id' => 'Creator ID',
            'content' => 'Content',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
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
    public function getComment()
    {
        return $this->hasOne(ForumComment::className(), ['id' => 'comment_id']);
    }

    /**
     * @inheritdoc
     * @return ForumSubcommentQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new ForumSubcommentQuery(get_called_class());
    // }
}
