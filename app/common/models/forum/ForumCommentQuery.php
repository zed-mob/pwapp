<?php

namespace common\models\forum;

/**
 * This is the ActiveQuery class for [[ForumComment]].
 *
 * @see ForumComment
 */
class ForumCommentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ForumComment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ForumComment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
