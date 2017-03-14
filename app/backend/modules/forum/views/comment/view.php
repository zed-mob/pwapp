<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\forum\ForumComment */
?>
<div class="forum-comment-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'topic_id',
            'creator_id',
            'content:ntext',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
