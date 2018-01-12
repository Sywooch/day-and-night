<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicsUseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Используемые темы';
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

            [
                'attribute' => 'id_user',
                'label' => 'Автор заявки',
                'value' => function ($data) {
                    return $data->id_user;
                },
                'content' => function ($data) {
                    return $data->user->username;
                },
            ],
            [
                'attribute' => 'id_topic',
                'label' => 'Выбранная тема',
                'value' => function ($data) {
                    return $data->id_topic;
                },
                'content' => function ($data) {
                    return $data->topic->name_topic;
                },
            ],

            ['class' => 'app\models\grids\ActionColumn'],
        ],
    ]); ?>
</div>
