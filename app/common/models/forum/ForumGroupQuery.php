<?php

namespace common\models\forum;

/**
 * This is the ActiveQuery class for [[ForumGroup]].
 *
 * @see ForumGroup
 */
class ForumGroupQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ForumGroup[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ForumGroup|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
