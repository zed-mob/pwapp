<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faq_category".
 *
 * @property integer $id
 * @property string $category
 *
 * @property Faq[] $faqs
 */
class FaqCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqs()
    {
        return $this->hasMany(Faq::className(), ['faq_category_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return FaqCategoryQuery the active query used by this AR class.
     */
    // public static function find()
    // {
    //     return new FaqCategoryQuery(get_called_class());
    // }
}
