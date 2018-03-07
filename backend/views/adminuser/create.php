<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Adminuser */

$this->title = Yii::t('app', '注册成为管理员');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adminusers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
