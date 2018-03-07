<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Quiz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quiz-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'admin_id')->textInput() ?>

    <?= $form->field($model, 'options')->textInput() ?>

    <?= $form->field($model, 'difficulty')->dropDownList(['1' => '初级','2' => '中级','3' => '高级']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '创建') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
