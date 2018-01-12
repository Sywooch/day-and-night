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

            'id',
            'id_topic',
            'id_author',
            'article_name',
            'uniqueness',
            // 'develop_theme:ntext',
            // 'empty_words:ntext',
            // 'keywords:ntext',
            // 'comment_view:ntext',
            // 'status',
            // 'date_creature',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
