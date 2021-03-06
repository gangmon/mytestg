<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Adminuser */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="adminuser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength'=>true]) ?>


    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile')->textarea(['rows' => 6]) ?>

    <!--        --><?//= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>
    <!---->
    <!--        --><?//= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>
    <!---->
    <!--        --><?//= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <!--            --><?//= Html::submitButton($model->isNewRecord ? '新增' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::submitButton('注册', ['class' =>'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>





<!--<div class="adminuser-form">-->
<!---->
<!--    --><?php //$form = ActiveForm::begin(); ?>
<!---->
<!--    --><?//= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'profile')->textarea(['rows' => 6]) ?>
<!---->
<!--    --><?//= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>
<!---->
<!--    --><?//= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>
<!---->
<!--    <div class="form-group">-->
<!--        --><?//= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
<!--    </div>-->
<!---->
<!--    --><?php //ActiveForm::end(); ?>
<!---->
<!--</div>-->
