<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property integer $id
 * @property integer $faq_category_id
 * @property string $question
 * @property string $answer
 *
 * @property FaqCategory $faqCategory
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faq_category_id'], 'integer'],
            [['question', 'answer'], 'string'],
            [['faq_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => FaqCategory::className(), 'targetAttribute' => ['faq_category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faq_category_id' => 'Faq Category ID',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqCategory()
    {
        return $this->hasOne(FaqCategory::className(), ['id' => 'faq_category_id']);
    }

    /**
     * @inheritdoc
     * @return FaqQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new FaqQuery(get_called_class());
    // }
}
