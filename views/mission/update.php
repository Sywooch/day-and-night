<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = 'Редактирование задания';
$this->params['breadcrumbs'][] = ['label' => 'Задания копирайтерам', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование задания';
?>
<div class="mission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
