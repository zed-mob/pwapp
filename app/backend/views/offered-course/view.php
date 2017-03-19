<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OfferedCourse */
?>
<div class="offered-course-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title:ntext',
            'content:ntext',
        ],
    ]) ?>

</div>
