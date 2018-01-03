<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QueryWork */

$this->title = 'Create Query Work';
$this->params['breadcrumbs'][] = ['label' => 'Query Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="query-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
