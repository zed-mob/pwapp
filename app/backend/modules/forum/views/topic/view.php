<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\forum\ForumTopic */
?>
<div class="forum-topic-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'group_id',
            'creator_id',
            'topic:ntext',
            'description:ntext',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
