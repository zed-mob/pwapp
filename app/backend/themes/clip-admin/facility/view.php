<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Facility */
?>
<div class="facility-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category:ntext',
            'name:ntext',
        ],
    ]) ?>

</div>
