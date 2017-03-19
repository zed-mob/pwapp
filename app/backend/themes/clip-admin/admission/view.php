<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Admission */
?>
<div class="admission-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'content:ntext',
        ],
    ]) ?>

</div>
