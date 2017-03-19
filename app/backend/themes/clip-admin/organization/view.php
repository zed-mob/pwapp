<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Organization */
?>
<div class="organization-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:ntext',
            'position',
            'group_id',
            'image',
        ],
    ]) ?>

</div>
