<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TopicsUse */

$this->title = 'Закрепить тему';
$this->params['breadcrumbs'][] = ['label' => 'Текущие темы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topics-use-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
