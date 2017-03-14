<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\forum\ForumComment */

?>
<div class="forum-comment-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
