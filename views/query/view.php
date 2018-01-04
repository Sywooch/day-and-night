<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Query */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Запросы копирайтеров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="query-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот запрос?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_author',
            'work_date',
            'start_time',
            'en_time',
            'count_symbols',
            'status',
            'date_query',
        ],
    ]) ?>

</div>
