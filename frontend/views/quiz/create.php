<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Quiz */

$this->title = '请出卷';
$this->params['breadcrumbs'][] = ['label' => '试卷', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quiz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
