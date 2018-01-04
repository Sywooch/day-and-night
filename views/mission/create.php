<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mission */

$this->title = 'Создание задания';
$this->params['breadcrumbs'][] = ['label' => 'Задания копирайтров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
