<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchQueryWork */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задачи разработчикам';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="query-work-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать задачу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute' => 'id_author',
                'label' => 'Автор заявки',
                'value' => function ($data) {
                    return $data->id_author;
                },
                'content' => function ($data) {
                    return $data->author->username;
                },
            ],
            'text:ntext',
            'start_time',
            'end_time',
            // 'status',
            // 'date_query',

            ['class' => 'app\models\grids\ActionColumn'],
        ],
    ]); ?>
</div>
