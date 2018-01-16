<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Status;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Запросы копирайтеров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="query-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать запрос', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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
            'work_date',
            'start_time',
            'en_time',
            'count_symbols',
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'value' => function ($data) {
                    return $data->status;
                },
                'content' => function ($data) {
                    if($data->status == Status::ZR){
                        $status = Html::a('Назначить задание', '#', ['class' => 'btn-info']);
                    } else {
                        $style = $data->status ? 'color: green;' : 'color: red;';
                        $status = "<span style='font-weight: 700;$style'>" . Status::getLabel($data->status) . "</span>";
                    }

                    return $status;
                },
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['style' => 'width: 50px;text-align: center;',];
                },
            ],
            // 'date_query',

            ['class' => 'app\models\grids\ActionColumn'],
        ],
    ]); ?>
</div>
