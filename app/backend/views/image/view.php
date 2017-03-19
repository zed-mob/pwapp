<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Image */
?>
<div class="image-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'album_id',
            'filename',
            'filepath',
        ],
    ]) ?>

</div>
