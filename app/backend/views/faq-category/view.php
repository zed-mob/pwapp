<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FaqCategory */
?>
<div class="faq-category-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category',
        ],
    ]) ?>

</div>
