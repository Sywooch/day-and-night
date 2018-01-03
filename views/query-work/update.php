<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\QueryWork */

$this->title = 'Update Query Work: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Query Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="query-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
