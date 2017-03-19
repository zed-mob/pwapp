<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[OfferedCourse]].
 *
 * @see OfferedCourse
 */
class OfferedCourseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return OfferedCourse[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return OfferedCourse|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
