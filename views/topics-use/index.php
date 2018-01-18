<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicsUseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Текущие темы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topics-use-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Закрепить тему', ['create'], ['class' => 'btn btn-success']) ?>
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
