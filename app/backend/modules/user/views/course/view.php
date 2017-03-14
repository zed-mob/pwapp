<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\user\Course */
?>
<div class="course-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code:ntext',
            'name:ntext',
            'tagline:ntext',
            'logo:ntext',
            'status',
        ],
    ]) ?>

</div>
