<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\forum\ForumSubcomment */
?>
<div class="forum-subcomment-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'comment_id',
            'creator_id',
            'content:ntext',
            'status',
            'updated_at',
            'created_at',
        ],
    ]) ?>

</div>
