<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\user\Profile */
?>
<div class="profile-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'student_id',
            'firstname',
            'lastname',
            'phone_no',
            'mobile_no',
            'street',
            'city',
            'province',
            'zip_code',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
