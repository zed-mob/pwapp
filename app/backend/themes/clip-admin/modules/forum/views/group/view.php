<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\forum\ForumGroup */
?>
<div class="forum-group-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'logo:ntext',
            'tagline:ntext',
            'status',
        ],
    ]) ?>

</div>
