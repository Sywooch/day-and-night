<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicsUseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Topics Uses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topics-use-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Topics Use', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'id_topic',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
