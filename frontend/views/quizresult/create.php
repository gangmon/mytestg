<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Quizresult */

$this->title = 'Create Quizresult';
$this->params['breadcrumbs'][] = ['label' => 'Quizresults', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quizresult-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
