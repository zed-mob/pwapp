<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property integer $id
 * @property integer $owner_id
 * @property integer $sender_id
 * @property integer $receiver_id
 * @property string $subject
 * @property string $body
 * @property integer $is_read
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Profile $owner
 * @property Profile $sender
 * @property Profile $receiver
 */
class Message extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'owner_id', 'sender_id', 'receiver_id', 'subject', 'created_at', 'updated_at'], 'required'],
            [['id', 'owner_id', 'sender_id', 'receiver_id', 'is_read', 'created_at', 'updated_at'], 'integer'],
            [['subject', 'body'], 'string'],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['owner_id' => 'user_id']],
            [['sender_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['sender_id' => 'user_id']],
            [['receiver_id'], 'exist', 'skipOnError' => true, 'targetClass' => Profile::className(), 'targetAttribute' => ['receiver_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_id' => 'Owner ID',
            'sender_id' => 'Sender ID',
            'receiver_id' => 'Receiver ID',
            'subject' => 'Subject',
            'body' => 'Body',
            'is_read' => 'Is Read',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'owner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSender()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'sender_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceiver()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'receiver_id']);
    }

    /**
     * @inheritdoc
     * @return MessageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MessageQuery(get_called_class());
    }
}
