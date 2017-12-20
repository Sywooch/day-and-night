<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TopicsUse */

$this->title = 'Create Topics Use';
$this->params['breadcrumbs'][] = ['label' => 'Topics Uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topics-use-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
