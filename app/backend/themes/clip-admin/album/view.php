<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Album */
?>
<div class="album-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'description:ntext',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
