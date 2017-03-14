<?php

namespace common\models\forum;

/**
 * This is the ActiveQuery class for [[ForumTopic]].
 *
 * @see ForumTopic
 */
class ForumTopicQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ForumTopic[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ForumTopic|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
