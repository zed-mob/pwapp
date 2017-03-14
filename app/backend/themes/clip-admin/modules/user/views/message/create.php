<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\user\Message */

?>
<div class="message-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
