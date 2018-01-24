<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_author',
                'label' => 'Автор новости',
                'value' => function ($data) {
                    return $data->id_author;
                },
                'content' => function ($data) {
                    return $data->author->username;
                },
            ],

            'name',

            //вместо 'text:ntext' - обрезка текста многоточием,
            [
                'attribute' => 'text',
                'format' => 'ntext',
                'content' => function ($data) {
                    return app\models\ProcessingTextChange::shorteningText($data->text, 5);
                },
            ],

            'date_publication',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
