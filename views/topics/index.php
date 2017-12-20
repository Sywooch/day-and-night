<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Topics';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="topics-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Topics', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name_topic',
            [
                'attribute' => 'status',
                'label' => 'Статус',
                'value' => function ($data) {
                    return $data->id_author;
                },
                'content' => function ($data) {
                    $status = ['Off', 'Ok'];
                    $style = $data->status ? 'color: green;' : 'color: red;';

                    return "<span style='font-weight: 700;$style'>" . $status[$data->status] . "</span>";
                },
                'contentOptions' =>function ($model, $key, $index, $column){
                    return ['style' => 'width: 50px;text-align: center;',];
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
