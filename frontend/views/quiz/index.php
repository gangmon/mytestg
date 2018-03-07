<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\QuizSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '考试信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quiz-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建考试', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'id',
                'label' => '试卷编号'],
            ['attribute' => 'admin_id',
            'label' => '出卷人'],
            //'admin_id',
            ['attribute' => 'options',
            'label' => '选择题'],
            //'options',
            ['attribute' =>'difficulty',
            'label' => '难度系数'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
