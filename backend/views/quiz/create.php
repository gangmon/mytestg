<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Quiz */

$this->title = Yii::t('app', '新建试卷');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '试卷'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--'<pre>'--><?php //print_r($this);?><!--'</pre>'-->
<div class="quiz-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
