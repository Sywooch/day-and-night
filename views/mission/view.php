<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Задания копирайтеров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить это задание?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_topic',
            'id_author',
            'article_name',
            'uniqueness',
            'develop_theme:ntext',
            'empty_words:ntext',
            'keywords:ntext',
            'comment_view:ntext',
            'status',
            'date_creature',
        ],
    ]) ?>

</div>
