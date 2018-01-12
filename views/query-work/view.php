<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QueryWork */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Задачи разработчикам', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="query-work-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту задачу?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_author',
            'text:ntext',
            'start_time',
            'end_time',
            'status',
            'date_query',
        ],
    ]) ?>

</div>
