<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
?>
<div class="post-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'creator_id',
            'title:ntext',
            'content:ntext',
            'image',
            'category',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
