<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Quiz */
//Yii::$app->language = 'zh-CN';
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '试卷'), 'url' => ['index']];
$this->params['breadcrumbs'][] = '试卷编号'.$this->title;
?>
<div class="quiz-view">

    <h1><?= Html::encode('试卷编号'.$this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                    'attribute' => 'admin_id',
                'value' => $model->admin->username,
            ],
//            'admin_id',
            [
                    'attribute' => 'difficulty',
//                'value' => ['1' => 'jiandan','2' => 'nan','3'=>'hennan'],
            ],

            'options',
            'difficulty',
        ],
    ]) ?>

</div>
