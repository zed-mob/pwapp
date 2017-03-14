<?php

namespace common\models\user;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $user_id
 * @property string $student_id
 * @property integer $course_id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone_no
 * @property string $mobile_no
 * @property string $street
 * @property string $city
 * @property string $province
 * @property string $zip_code
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property ForumComment[] $forumComments
 * @property ForumSubcomment[] $forumSubcomments
 * @property ForumTopic[] $forumTopics
 * @property Messages[] $messages
 * @property Messages[] $messages0
 * @property Messages[] $messages1
 * @property Post[] $posts
 * @property User $user
 * @property Course $course
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'created_at', 'updated_at'], 'required'],
            [['course_id', 'created_at', 'updated_at'], 'integer'],
            [['student_id'], 'string', 'max' => 15],
            [['firstname', 'lastname'], 'string', 'max' => 50],
            [['phone_no', 'mobile_no'], 'string', 'max' => 20],
            [['street', 'city', 'province'], 'string', 'max' => 30],
            [['zip_code'], 'string', 'max' => 10],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'student_id' => 'Student ID',
            'course_id' => 'Course ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone_no' => 'Phone No',
            'mobile_no' => 'Mobile No',
            'street' => 'Street',
            'city' => 'City',
            'province' => 'Province',
            'zip_code' => 'Zip Code',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForumComments()
    {
        return $this->hasMany(ForumComment::className(), ['creator_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForumSubcomments()
    {
        return $this->hasMany(ForumSubcomment::className(), ['creator_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForumTopics()
    {
        return $this->hasMany(ForumTopic::className(), ['creator_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMessages()
    {
        return $this->hasMany(Messages::className(), ['owner_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSentMessages()
    {
        return $this->hasMany(Messages::className(), ['sender_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivedMessages()
    {
        return $this->hasMany(Messages::className(), ['receiver_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['creator_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * @inheritdoc
     * @return ProfileQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new ProfileQuery(get_called_class());
    // }
}
