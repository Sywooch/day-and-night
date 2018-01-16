<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QueryWork */

$this->title = 'Редактирование задачи';
$this->params['breadcrumbs'][] = ['label' => 'Задачи разрабочикам', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование задачи';
?>
<div class="query-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
