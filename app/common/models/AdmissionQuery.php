<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Admission]].
 *
 * @see Admission
 */
class AdmissionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Admission[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Admission|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
