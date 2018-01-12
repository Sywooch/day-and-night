<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Query */

$this->title = 'Создание запроса';
$this->params['breadcrumbs'][] = ['label' => 'Запросы копирайтеров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="query-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
