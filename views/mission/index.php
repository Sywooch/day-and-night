<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Задания копирайтерам';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать задание', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
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
            'article_name',
            'uniqueness',
            // 'develop_theme:ntext',
            // 'empty_words:ntext',
            // 'keywords:ntext',
            // 'comment_view:ntext',
            // 'status',
            // 'date_creature',

            ['class' => 'app\models\grids\ActionColumn'],
        ],
    ]); ?>
</div>
