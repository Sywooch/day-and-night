<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Topics */

$this->title = 'Редакция темы';
$this->params['breadcrumbs'][] = ['label' => 'Темы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name_topic, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редакция темы';
?>
<div class="topics-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
