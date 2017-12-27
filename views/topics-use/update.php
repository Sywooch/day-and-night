<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TopicsUse */

$this->title = 'Обновление связи';
$this->params['breadcrumbs'][] = ['label' => 'Используемые темы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление связи';
?>
<div class="topics-use-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
