<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Faq */
?>
<div class="faq-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'faq_category_id',
            'question:ntext',
            'answer:ntext',
        ],
    ]) ?>

</div>
