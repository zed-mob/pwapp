<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\About */
?>
<div class="about-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'content:ntext',
        ],
    ]) ?>

</div>
