<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\user\Message */
?>
<div class="message-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'owner_id',
            'sender_id',
            'receiver_id',
            'subject:ntext',
            'body:ntext',
            'is_read',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
